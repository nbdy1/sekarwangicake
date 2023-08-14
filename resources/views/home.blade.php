@extends('layouts.main')
@section('content')
    <div class="flex flex-col">
        <div class="flex h-[90vh] rounded-[6rem] overflow-hidden object-cover relative mb-12">
            <div class="absolute bg-gradient-to-tr from-primary to-transparent w-full h-full via-transparent opacity-50">
            </div>
            <div class="absolute top-1/2 left-20">
                <p class="text-7xl font-baloo font-bold text-secondary">Indulge in Artistry</p>
                <p class="text-3xl font-baloo font-bold text-white">Discover Our Exquisite Custom Cakes!</p>
                @include('partials._button')
            </div>

            <img src="https://s3-alpha-sig.figma.com/img/08f6/df23/7304f97801e79347a3b2193c00fda742?Expires=1692576000&Signature=bxQfR1l1HIyuBN~Q1cA5~1w~GU~LDF340V0wesQSk~~NUVaRSycxrYaCPDRBeRctQzsB0w~ROTA372GUkT~Ufn4xp~gQcoeTdDLejmfmreWAWxBNy5zQrERk~0hCCSjTO0iYjzMw8i7NfXZJO0Epkn7cMlRJuN8sfS-ScNsUvggFIVkqs5sIRZsEqgjAqbvmm4487K5TD97jA3-Q8hg29S8lTKZCpM~FQdPfpfOD3N6VoIs1dgU5x90wSyyRR0KBNgok4mLay7pVxt5tUsZhqhRyI~jeJsCnISKpgPsDOIPAjQvYIF9vZxxp-0qdc4SMhkf4rliOrZIXoPqZ2ro8aA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                class="object-cover w-full" />
        </div>
    </div>
    {{-- <p class=" h-[120vh] flex text-7xl font-bold font-baloo text-secondary justify-center items-center">Hello World</p> --}}
@endsection
