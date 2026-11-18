<section class="account-ticket__edit" aria-labelledby="account-ticket-edit-title">
    <header class="account-ticket__edit-header">
        <h2 id="account-ticket-edit-title">Datos de visitante</h2>
        <p>Estos datos identifican tu cuenta en ESIM Park.</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="account-ticket__form">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" value="Nombre completo" class="account-ticket__label" />
            <x-text-input id="name" name="name" type="text" class="account-ticket__input mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" value="Correo electrónico" class="account-ticket__label" />
            <x-text-input id="email" name="email" type="email" class="account-ticket__input mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Tu correo electrónico no está verificado.') }}

                        <button form="send-verification" class="account-ticket__verification-link">
                            {{ __('Volver a enviar el correo de verificación') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Se envió un nuevo enlace de verificación.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="account-ticket__actions">
            <x-primary-button class="account-ticket__save">Guardar mis datos</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Datos guardados.') }}</p>
            @endif
        </div>
    </form>
</section>
