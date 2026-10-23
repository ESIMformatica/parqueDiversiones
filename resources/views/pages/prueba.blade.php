@extends('layouts.app')

@section('title', 'Prueba | Web Fun Park')

@section('content')

    <section class="hero-card">
        <div class="hero-shape hero-shape-green"></div>
        <div class="hero-shape hero-shape-orange"></div>
        <div class="hero-shape hero-shape-purple"></div>

        <p class="hero-kicker">
            Vista de prueba
        </p>

        <h1>
            Todo está funcionando
        </h1>

        <p class="hero-copy">
            Esta vista está usando el layout principal,
            junto con el navbar y el sidebar compartidos.
        </p>
    </section>

@endsection