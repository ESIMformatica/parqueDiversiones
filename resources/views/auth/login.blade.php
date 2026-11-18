<x-login-layout>
    <div class="park-login__form-wrap">
        <p class="park-login__eyebrow"><span></span> Acceso al parque</p>
        <h2>Qué bueno verte<br><em>de nuevo.</em></h2>
        <p class="park-login__intro">Entra a tu cuenta y sigue disfrutando.</p>

        @if (session('status'))
            <p class="park-login__notice" role="status">{{ session('status') }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}" class="park-login__form">
            @csrf

            <div class="park-login__field">
                <label for="email">Correo electrónico</label>
                <div class="park-login__input-wrap">
                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none">
                        <path d="M3.75 6.75h16.5v10.5H3.75z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        <path d="m4.5 7.5 7.5 6 7.5-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="tu@correo.com" autocomplete="username" required autofocus>
                </div>
                @error('email')
                    <p class="park-login__error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <div class="park-login__field">
                <label for="password">Contraseña</label>
                <div class="park-login__input-wrap">
                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none">
                        <rect x="4.5" y="10" width="15" height="10.25" rx="2" stroke="currentColor" stroke-width="1.6" />
                        <path d="M8 10V7.25a4 4 0 0 1 8 0V10m-4 4v2.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                    <input id="password" name="password" type="password" placeholder="Tu contraseña" autocomplete="current-password" required>
                </div>
                @error('password')
                    <p class="park-login__error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <div class="park-login__options">
                <label class="park-login__remember" for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>Recordarme</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                @endif
            </div>

            <button type="submit" class="park-login__submit">
                <span>Entrar al parque</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none">
                    <path d="M4.5 12h14m-5.5-5.5L18.5 12 13 17.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </form>

        <div class="park-login__divider"><span>o continúa con</span></div>

        <a href="{{ route('google.redirect') }}" class="park-login__google">
            <svg aria-hidden="true" viewBox="0 0 48 48">
                <path fill="#FFC107" d="M43.6 24.5c0-1.4-.1-2.8-.4-4.1H24v7.8h11c-.5 2.5-1.9 4.7-4.1 6.1v5h6.6c3.9-3.6 6.1-8.8 6.1-14.8Z" />
                <path fill="#FF3D00" d="M24 44c5.5 0 10.1-1.8 13.5-4.8l-6.6-5c-1.8 1.2-4.1 2-6.9 2-5.3 0-9.8-3.6-11.4-8.5H5.8v5.2A20 20 0 0 0 24 44Z" />
                <path fill="#4CAF50" d="M12.6 27.7a12 12 0 0 1 0-7.4v-5.2H5.8a20 20 0 0 0 0 17.8l6.8-5.2Z" />
                <path fill="#1976D2" d="M24 11.8c3 0 5.7 1 7.8 3.1l5.8-5.8A19.4 19.4 0 0 0 24 4 20 20 0 0 0 5.8 15.1l6.8 5.2c1.6-4.9 6.1-8.5 11.4-8.5Z" />
            </svg>
            <span>Continuar con Google</span>
        </a>

        @if (Route::has('register'))
            <p class="park-login__register">¿Primera visita? <a href="{{ route('register') }}">Crea tu cuenta</a></p>
        @endif
    </div>
</x-login-layout>
