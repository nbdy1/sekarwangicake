@props(['style' => 'primary'])
{{-- 
<button
    class="bg-secondary rounded-3xl shadow-primary border-2 border-primary shadow-brutal hover:shadow-brutalh transition-[box-shadow] text-xl px-5 py-2 text-primary font-dm font-bold">Discover</button>

    @props(['style' => 'primary']) --}}

<button class
    {{ $attributes->merge(['class' => 'bg-secondary rounded-3xl shadow-primary border-2 border-primary shadow-brutal hover:shadow-brutalh transition-[box-shadow] text-xl px-5 py-2 text-primary font-dm font-bold' . ($style === 'secondary' ? 'bg-secondary shadow-primary border-primary text-primary' : 'bg-white border-black shadow-black text-black')]) }}>
    {{ $slot }}
</button>
