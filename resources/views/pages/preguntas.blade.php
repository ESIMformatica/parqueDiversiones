
@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/preguntas.css') }}">

<div class="faq-page">
    <header class="faq-header">
        <span class="faq-eyebrow">ESIMPARK · AYUDA</span>
        <h1>¿Tenés alguna duda?</h1>
        <p>Encontrá respuestas a las preguntas más frecuentes sobre nuestro parque y sus atracciones.</p>
    </header>

    <section class="faq-content" aria-label="Preguntas frecuentes">

        <details class="faq-item">
            <summary>¿Qué es ESIMPark?</summary>
            <div class="faq-answer">
                <p>ESIMPark es un parque de diversiones con distintas atracciones para disfrutar, explorar y compartir una experiencia divertida.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary>¿Qué atracciones puedo encontrar?</summary>
            <div class="faq-answer">
                <p>Podés explorar nuestras atracciones, como Mirror Maze, Free Fall, Roller Coaster, Boo's Pathway, Carousel, Pirate Ship, Crazy Worm y Kamikaze.</p>
            </div>
        </details>

                <details class="faq-item">
            <summary>¿Donde está ESIMPark?</summary>
            <div class="faq-answer">
                <p>ESIMPark se encuentra en la Escuela Secundaria de Innovación de Misiones (ESIM), en la ciudad de Posadas, provincia de Misiones, y se presenta durante el Día del IDI.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary>¿Pueden probar menores el parque?</summary>
            <div class="faq-answer">
                <p>Sí, pueden probar menores el parque, pero es recomendable que estén acompañados por un adulto.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary>¿Cómo puedo conocer una atracción?</summary>
            <div class="faq-answer">
                <p>Ingresá a la sección Atracciones del menú lateral y seleccioná la que quieras conocer para consultar su información, también podes acceder desde el mapa interactivo en la pestaña de Inicio.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary>¿Cómo me puedo comunicar con el parque?</summary>
            <div class="faq-answer">
                <p>Podés consultar nuestro teléfono y correo electrónico en la sección Contacto del menú lateral.</p>
            </div>
        </details>

    </section>

    <footer class="faq-help">
        <div>
            <h2>¿No encontraste tu respuesta?</h2>
            <p>Comunicate con nosotros desde la sección Contacto.</p>
        </div>
        <a href="mailto:esimpark@esim.edu.ar" class="faq-contact-button">
            Contactanos
        </a>
    </footer>
</div>
@endsection
