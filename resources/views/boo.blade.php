<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Boo's Pathway</title> -->

    @extends('layouts.var')

    @section('title', "Boo's Pathway - Feria")

    @section('attraction_title', "Boo's Pathway")

    @section('page_id', 'boo')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/booStyle.css') }}">
    @endpush

    <meta name="theme-color" content="#0d0714">
</head>
<body>
    @section('content')

    <div class="parallax-wrapper">
        
        <div class="parallax-layer layer-1" style="background-image: url({{asset('imgBoo/fondo1.png')}});"></div>
        <div class="parallax-layer layer-2" style="background-image: url({{asset('imgBoo/fondo2.png')}});"></div>
        <div class="parallax-layer layer-3" style="background-image: url({{asset('imgBoo/boos3.png')}});"></div>
        <div class="parallax-layer layer-4" style="background-image: url({{asset('imgBoo/nubes4.png')}});"></div>

        <div class="parallax-content">
            
            <section class="section intro-section">
                <div class="content-container">
                    <h1 class="titulo">Boo's Pathway</h1>
                    <br><br><br>
                    <p class="texto-normal">
                        Adéntrate en la mansión encantada del universo de “Super Mario” a través de un recorrido breve.
                    </p>

                    <br><br>

                    <p class="texto-normal duration-text">
                        Este recorrido dura aproximadamente 15 a 20 segundos, dejándote explorar los alrededores mientras vas en línea recta.
                    </p>
                </div>
            </section>

            <section class="section credits-section">
                <div class="content-container">
                    
                    <h2 class="texto-normal section-title">Integrantes del desarrollo:</h2>
                    
                    <div class="team-container">
                       <div>
                            <div class="avatar-wrapper">
                                <img src="{{asset('imgBoo/yuliano.jpg')}}" alt="Yuliano Sisterna" class="avatar-img">
                            </div>
                            <p class="member-name">Yuliano<br>Sisterna</p>
                        </div>

                        <div>
                            <div class="avatar-wrapper">
                                <img src="{{asset('imgBoo/gianluca.jpg')}}" alt="Gianluca Ferrando" class="avatar-img">
                            </div>
                            <p class="member-name">Gianluca<br>Ferrando</p>
                        </div>

                        <div>
                            <div class="avatar-wrapper">
                                <img src="{{asset('imgBoo/benicio.jpg')}}" alt="Benicio Basualdo" class="avatar-img">
                            </div>
                            <p class="member-name">Benicio<br>Basualdo</p>
                        </div>
                    </div>
                </div>

                <footer class="footer-credits">
                    © Copyright ESIM 2026 / Nintendo Co. Ltd
                </footer>
            </section>

        </div> </div> 
    @endsection
</body>
</html>