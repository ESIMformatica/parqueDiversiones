<x-login-layout
    scene-kicker="Recupera tu acceso"
    scene-title-top="La aventura"
    scene-title-bottom="te espera."
    scene-description="Recupera tu cuenta y vuelve a planear tu próxima visita."
    page-title="Recuperar contraseña · ESIM Park"
>
    <div class="park-login__form-wrap">
        <p class="park-login__eyebrow"><span></span> Recupera tu acceso</p>
        <h2>¿Olvidaste tu<br><em>contraseña?</em></h2>
        <p class="park-login__intro">Escribe el correo de tu cuenta y te enviaremos un enlace para crear una nueva.</p>

        @if (session('status'))
            <p class="park-login__notice" role="status">{{ session('status') }}</p>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="park-login__form">
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

            <button type="submit" class="park-login__submit">
                <span>Enviar enlace de recuperación</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none">
                    <path d="M4.5 12h14m-5.5-5.5L18.5 12 13 17.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </form>

        <p class="park-login__register"><a href="{{ route('login') }}">Volver a iniciar sesión</a></p>
    </div>
</x-login-layout>
