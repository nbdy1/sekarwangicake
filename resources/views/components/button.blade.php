@props(['style' => 'primary'])
{{-- 
<button
    class="bg-secondary rounded-3xl shadow-primary border-2 border-primary shadow-brutal hover:shadow-brutalh transition-[box-shadow] text-xl px-5 py-2 text-primary font-dm font-bold">Discover</button>

    @props(['style' => 'primary']) --}}

<button
    {{ $attributes->merge(['class' => 'rounded-2xl border-2 shadow-brutal hover:shadow-brutalh transition-[all] text-xl px-5 py-2 font-dm font-semibold hover:translate-y-1 hover:translate-x-1' . ($style === 'secondary' ? ' bg-white border-black shadow-black text-black' : ' bg-secondary shadow-primary border-primary text-primary')]) }}>
    {{ $slot }}
</button>
