@php
    $stages = [
        [
            'image' => 'proceso-1.jpg',
            'stage' => 'Etapa 01 — Estructura',
            'title' => 'Corte y armado de la torre',
            'text' => 'Armado de los volúmenes escalonados del edificio, respetando los retranqueos Art Déco y el color de la piedra caliza.',
        ],
        [
            'image' => 'proceso-2.jpg',
            'stage' => 'Etapa 02 — Mecanismo',
            'title' => 'Guía vertical y carrito',
            'text' => 'Montaje de la guía central sobre la fachada para que el carrito suba con Kong y baje sin trabarse.',
        ],
        [
            'image' => 'proceso-3.jpg',
            'stage' => 'Etapa 03 — Terminación',
            'title' => 'King Kong y detalles',
            'text' => 'Modelado de Kong sujetando el carrito, pintura de las ventanas y ambientación de la calle en la base.',
        ],
    ];
@endphp

<section class="esb-bay" id="taller" aria-labelledby="esb-workshop-title">
    <div class="esb-plaque">

        <header class="esb-section-head">
            <div>
                <p class="esb-label esb-label--accent">Taller</p>
                <h2 class="esb-heading" id="esb-workshop-title">El trabajo detrás de la maqueta</h2>
            </div>
            <p class="esb-text">
                Cómo pasamos de los planos a una torre funcionando: estructura, mecanismo y terminación.
            </p>
        </header>

        <div class="esb-cards">
            @foreach ($stages as $stage)
                <article class="esb-card">
                    <figure class="esb-media">
                        <div class="esb-media-frame" data-esb-media>
                            <img src="{{ asset('images/fall/' . $stage['image']) }}" alt="{{ $stage['title'] }}">
                            <div class="esb-placeholder">
                                <div class="esb-placeholder-box">
                                    <span class="esb-label">Foto pendiente</span>
                                    <code>public/images/fall/{{ $stage['image'] }}</code>
                                </div>
                            </div>
                        </div>
                    </figure>
                    <div class="esb-card-body">
                        <span class="esb-label esb-label--accent">{{ $stage['stage'] }}</span>
                        <h3>{{ $stage['title'] }}</h3>
                        <p>{{ $stage['text'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>

