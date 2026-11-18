<x-app-layout>
    <x-slot name="header">
        <div class="account-page-heading">
            <span>ESIM PARK / ÁREA PERSONAL</span>
            <h2>Mi cuenta</h2>
        </div>
    </x-slot>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/park-branding.css') }}">
    @endpush

    <div class="account-page">
        <article class="account-ticket" aria-labelledby="account-ticket-title">
            <header class="account-ticket__header">
                <a class="account-ticket__brand" href="{{ route('inicio') }}" aria-label="Ir al inicio de ESIM Park">
                    <img src="{{ asset('img/esim-park-logo.png') }}" alt="ESIM Park">
                </a>
                <div class="account-ticket__serial">
                    <span>IDENTIFICACIÓN DE VISITANTE</span>
                    <strong>ESIM-{{ str_pad((string) $user->id, 6, '0', STR_PAD_LEFT) }}</strong>
                </div>
            </header>

            <div class="account-ticket__perforation" aria-hidden="true"></div>

            <div class="account-ticket__body">
                <div class="account-ticket__details">
                    <p class="account-ticket__eyebrow">TU PASE PERSONAL</p>
                    <h1 id="account-ticket-title">Este ticket marca tu pequeño paso por ESIM Park.</h1>
                    <p class="account-ticket__intro">
                        Guardá tus datos de visitante y preparate para votar por los trabajos de la muestra.
                    </p>

                    @include('profile.partials.update-profile-information-form')
                </div>

                <aside class="account-ticket__qr" aria-labelledby="account-ticket-qr-title">
                    <p class="account-ticket__qr-kicker">MUESTRA DE TRABAJOS</p>
                    <h2 id="account-ticket-qr-title">Tu voto</h2>
                    <div class="account-ticket__qr-space" role="img" aria-label="Espacio reservado para el código QR de votación">
                        <span>QR</span>
                        <small>PRÓXIMAMENTE</small>
                    </div>
                    <p>El código para votar aparecerá aquí cuando esté disponible.</p>
                </aside>
            </div>

            <footer class="account-ticket__footer">
                <span>UN PEQUEÑO PASO, UNA GRAN AVENTURA</span>
                <span>VISITANTE DESDE {{ optional($user->created_at)->format('d.m.Y') }}</span>
            </footer>
        </article>

        <div class="account-settings-grid">
            <section class="account-setting-card" aria-labelledby="account-password-title">
                <p class="account-setting-card__eyebrow">SEGURIDAD</p>
                <h2 id="account-password-title">Tu contraseña</h2>
                @include('profile.partials.update-password-form')
            </section>

            <section class="account-setting-card account-setting-card--danger" aria-labelledby="account-delete-title">
                <p class="account-setting-card__eyebrow">CONTROL DE CUENTA</p>
                <h2 id="account-delete-title">Opciones de cuenta</h2>
                @include('profile.partials.delete-user-form')
            </section>
        </div>
    </div>
</x-app-layout>
