@php
    $floors = [
        ['id' => 'introduccion', 'floor' => '102', 'label' => 'La atracción'],
        ['id' => 'funcionamiento', 'floor' => '86', 'label' => 'Funcionamiento'],
        ['id' => 'escalas', 'floor' => '40', 'label' => 'Escalas'],
        ['id' => 'taller', 'floor' => '12', 'label' => 'Taller'],
        ['id' => 'basamento', 'floor' => '01', 'label' => 'Lobby'],
    ];
@endphp

<nav class="esb-floor-nav" data-esb-floor-nav aria-label="Directorio de pisos del Empire State">
    <ul class="esb-floor-nav-list">
        @foreach ($floors as $index => $item)
            <li>
                <a
                    href="#{{ $item['id'] }}"
                    class="esb-floor-nav-link {{ $index === 0 ? 'is-active' : '' }}"
                    data-floor-link="{{ $item['id'] }}"
                >
                    <span class="esb-floor-nav-num">{{ $item['floor'] }}</span>
                    <span>{{ $item['label'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>

    <div class="esb-floor-nav-live" aria-live="polite">
        <span>Piso</span>
        <strong data-esb-mobile-floor>102</strong>
        <span data-esb-mobile-meters>381 m</span>
    </div>
</nav>
