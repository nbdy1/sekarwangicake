@props(['style' => 'primary', 'element' => 'button', 'href' => null])

@if ($element === 'anchor')
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => 'rounded-2xl shadow-brutal hover:shadow-brutalh transition-[all] text-xl px-5 py-2 font-dm font-semibold hover:translate-y-1 hover:translate-x-1 gap-x-3 justify-center items-center flex' . ($style === 'secondary' ? ' bg-secondary border-black text-black shadow-black' : ' bg-primary border-black text-white shadow-black hover:shadow-black ')]) }}>
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'rounded-2xl shadow-brutal hover:shadow-brutalh transition-[all] text-xl px-5 py-2 font-dm font-semibold hover:translate-y-1 hover:translate-x-1 gap-x-3 justify-center items-center flex' . ($style === 'secondary' ? ' bg-secondary border-black text-black shadow-black' : ' bg-primary border-black text-white shadow-black hover:shadow-black ')]) }}>
        {{ $slot }}
    </button>
@endif