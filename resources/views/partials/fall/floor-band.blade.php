{{-- Enjuta de piedra que separa los pisos de la fachada --}}
<div class="esb-band">
    <span class="esb-band-floor">{{ str_pad($floor, 2, '0', STR_PAD_LEFT) }}</span>
    <span class="esb-band-name"><b>{{ $name }}</b> &middot; {{ $section }}</span>
    <span class="esb-band-rule" aria-hidden="true"></span>
    <span class="esb-band-meta">{{ $meters }} m</span>
</div>

