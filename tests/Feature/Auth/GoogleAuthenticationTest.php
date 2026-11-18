<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Socialite\Two\GoogleProvider;
use Laravel\Socialite\Two\User as GoogleUser;
use Laravel\Socialite\Facades\Socialite;
use Mockery;
use Tests\TestCase;

class GoogleAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_offers_google_sign_in(): void
    {
        $this->get(route('login'))
            ->assertOk()
            ->assertSee(route('google.redirect'));
    }

    public function test_user_can_sign_in_with_a_verified_google_account(): void
    {
        $googleProvider = Mockery::mock(GoogleProvider::class);
        $googleProvider->shouldReceive('user')->once()->andReturn(GoogleUser::fake([
            'id' => 'google-user-123',
            'name' => 'Google User',
            'email' => 'google@example.com',
            'email_verified' => true,
        ]));

        Socialite::shouldReceive('driver')->once()->with('google')->andReturn($googleProvider);

        $response = $this->get(route('google.callback'));

        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'email' => 'google@example.com',
            'google_id' => 'google-user-123',
        ]);
        $response->assertRedirect(route('dashboard', absolute: false));
    }

    public function test_user_cannot_sign_in_with_an_unverified_google_email(): void
    {
        $googleProvider = Mockery::mock(GoogleProvider::class);
        $googleProvider->shouldReceive('user')->once()->andReturn(GoogleUser::fake([
            'email' => 'unverified@example.com',
            'email_verified' => false,
        ]));

        Socialite::shouldReceive('driver')->once()->with('google')->andReturn($googleProvider);

        $this->get(route('google.callback'))
            ->assertRedirect(route('login'))
            ->assertSessionHasErrors('email');

        $this->assertGuest();
        $this->assertDatabaseMissing('users', ['email' => 'unverified@example.com']);
    }
}