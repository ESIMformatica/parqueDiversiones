@php
    $sections = $sections ?? config('sidebar.sections', []);
@endphp

<aside class="retro-sidebar" id="sidebar">

    <button class="retro-toggle" id="sidebarToggle">
        ☰
    </button>

    <nav class="retro-sidebar__nav">
        @foreach($sections as $section)

            <ul class="retro-sidebar__list">

                @foreach($section['items'] as $item)

                    @php
                        $active = Route::has($item['route']) && request()->routeIs($item['route']);
                    @endphp

                    <li>

                        <a
                            href="{{ Route::has($item['route']) ? route($item['route']) : '#' }}"
                            class="retro-sidebar__link {{ $active ? 'is-active' : '' }}"
                        >
                            {{ $item['label'] }}
                        </a>

                    </li>

                @endforeach

            </ul>

        @endforeach
    </nav>

</aside>