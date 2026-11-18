<x-layout.appMirror title="Boo's Pathway | ESIMPark">
    <x-slot:sidebar>
        <x-layout.attraction-sidebar theme="boo" />
    </x-slot:sidebar>

    <x-slot:head>
        <meta name="theme-color" content="#0d0714">
        <link rel="stylesheet" href="{{ asset('css/booStyle.css') }}">
    </x-slot:head>
    <div class="boo-page">
<div class="parallax-wrapper">
        <div class="parallax-background" aria-hidden="true">
            <div class="parallax-layer layer-1" style="background-image: url('{{ asset('imgBoo/fondo1.png') }}');"></div>
            <div class="parallax-layer layer-2" style="background-image: url('{{ asset('imgBoo/fondo2.png') }}');"></div>
            <div class="parallax-layer layer-3" style="background-image: url('{{ asset('imgBoo/boos3.png') }}');"></div>
            <div class="parallax-layer layer-4" style="background-image: url('{{ asset('imgBoo/nubes4.png') }}');"></div>
        </div>

        <div class="parallax-content">
            
            <section class="section intro-section" id="inicio">
                <div class="content-container">
                    <h1 class="titulo">Boo's Pathway</h1>
                    <p class="texto-normal">
                        Adéntrate en la mansión encantada del universo de “Super Mario” a través de un recorrido breve.
                    </p>

                    <p class="texto-normal duration-text">
                        Este recorrido dura aproximadamente 15 a 20 segundos, dejándote explorar los alrededores mientras vas en línea recta.
                    </p>
                </div>
            </section>

            <section class="section credits-section" id="equipo">
                <div class="content-container">
                    
                    <h2 class="texto-normal section-title">Integrantes del desarrollo:</h2>
                    
                    <div class="team-container">
                       <div class="team-member">
                            <div class="avatar-wrapper">
                                <img src="{{asset('imgBoo/yuliano.jpg')}}" alt="Yuliano Sisterna" class="avatar-img">
                            </div>
                            <p class="member-name">Yuliano<br>Sisterna</p>
                        </div>

                        <div class="team-member">
                            <div class="avatar-wrapper">
                                <img src="{{asset('imgBoo/gianluca.jpg')}}" alt="Gianluca Ferrando" class="avatar-img">
                            </div>
                            <p class="member-name">Gianluca<br>Ferrando</p>
                        </div>

                        <div class="team-member">
                            <div class="avatar-wrapper">
                                <img src="{{asset('imgBoo/benicio.jpg')}}" alt="Benicio Basualdo" class="avatar-img">
                            </div>
                            <p class="member-name">Benicio<br>Basualdo</p>
                        </div>
                    </div>
                </div>

                <footer class="footer-credits">
                    © {{ date('Y') }} · ESIM Park
                </footer>
            </section>

        </div>
    </div>
    </div>
</x-layout.appMirror>
