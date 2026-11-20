<x-login-layout
    scene-kicker="Último paso"
    scene-title-top="Una contraseña"
    scene-title-bottom="nueva te espera."
    scene-description="Elige una clave segura y continúa con tu próxima aventura."
    page-title="Crear nueva contraseña · ESIM Park"
>
    <div class="park-login__form-wrap">
        <p class="park-login__eyebrow"><span></span> Casi listo</p>
        <h2>Crea una nueva<br><em>contraseña.</em></h2>
        <p class="park-login__intro">Usa una contraseña que no hayas utilizado antes.</p>

        <form method="POST" action="{{ route('password.store') }}" class="park-login__form">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="park-login__field">
                <label for="email">Correo electrónico</label>
                <div class="park-login__input-wrap">
                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none">
                        <path d="M3.75 6.75h16.5v10.5H3.75z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        <path d="m4.5 7.5 7.5 6 7.5-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <input id="email" name="email" type="email" value="{{ old('email', $request->email) }}" placeholder="tu@correo.com" autocomplete="username" required autofocus>
                </div>
                @error('email')
                    <p class="park-login__error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <div class="park-login__field">
                <label for="password">Nueva contraseña</label>
                <div class="park-login__input-wrap">
                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none">
                        <rect x="4.5" y="10" width="15" height="10.25" rx="2" stroke="currentColor" stroke-width="1.6" />
                        <path d="M8 10V7.25a4 4 0 0 1 8 0V10m-4 4v2.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                    <input id="password" name="password" type="password" placeholder="Nueva contraseña" autocomplete="new-password" required>
                </div>
                @error('password')
                    <p class="park-login__error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <div class="park-login__field">
                <label for="password_confirmation">Repite la contraseña</label>
                <div class="park-login__input-wrap">
                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none">
                        <rect x="4.5" y="10" width="15" height="10.25" rx="2" stroke="currentColor" stroke-width="1.6" />
                        <path d="M8 10V7.25a4 4 0 0 1 8 0V10m-4 4v2.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirma tu contraseña" autocomplete="new-password" required>
                </div>
                @error('password_confirmation')
                    <p class="park-login__error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="park-login__submit">
                <span>Guardar nueva contraseña</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none">
                    <path d="M4.5 12h14m-5.5-5.5L18.5 12 13 17.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </form>

        <p class="park-login__register"><a href="{{ route('login') }}">Volver a iniciar sesión</a></p>
    </div>
</x-login-layout>
