<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Contracts\User as SocialiteUser;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class GoogleAuthController extends Controller
{
    public function redirect(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(): RedirectResponse
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (Throwable $exception) {
            report($exception);

            return redirect()->route('login')->withErrors([
                'email' => __('Google sign-in could not be completed. Please try again.'),
            ]);
        }

        $email = $googleUser->getEmail();
        $googleId = $googleUser->getId();
        $rawUser = $googleUser->getRaw();
        $emailVerified = $rawUser['email_verified'] ?? $rawUser['verified_email'] ?? false;

        if (! $email || ! $googleId || $emailVerified !== true) {
            return redirect()->route('login')->withErrors([
                'email' => __('Google must provide a verified email address to sign in.'),
            ]);
        }

        $user = User::where('google_id', $googleId)->first();

        if (! $user) {
            $user = User::where('email', $email)->first();

            if ($user && $user->google_id && $user->google_id !== $googleId) {
                return redirect()->route('login')->withErrors([
                    'email' => __('This email is already linked to another Google account.'),
                ]);
            }

            if (! $user) {
                $user = new User;
                $user->name = $googleUser->getName() ?: Str::before($email, '@');
                $user->email = $email;
                $user->password = Str::random(40);
            }

            $user->google_id = $googleId;
            $user->email_verified_at ??= now();
            $user->save();
        }

        Auth::login($user, remember: true);
        request()->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }
}