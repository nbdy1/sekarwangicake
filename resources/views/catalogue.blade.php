@extends('layouts.main')
@section('content')
    <div class="pb-20 flex flex-col">
        <p class="text-6xl font-baloo font-bold text-primary my-6">Catalogue</p>
        <div class="flex flex-row gap-x-5 relative">
            @include('partials._catalogue_sidebar')
            <div class="flex-col flex relative w-full">
                <div class="flex-row flex sticky top-[4.5rem] h-24 p-5 gap-5 z-[100]">
                    <button
                        class="flex rounded-full bg-white border-2 border-gray-500 text-gray-500 text-lg font-medium text-center justify-center items-center px-10">Sort</button>
                    <button
                        class="flex rounded-full bg-white border-2 border-gray-500 text-gray-500 text-lg font-medium text-center justify-center items-center px-10">Color</button>
                </div>
                <div class="grid grid-cols-4 gap-5 w-full mt-5">
                    @foreach ($products as $product)
                        <div class="flex flex-col w-full">
                            <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl relative">
                                <p class="absolute right-5 top-5">{{ $product->product_type }}</p>
                            </div>
                            <p>{{ $product->product_name }}</p>
                            <p>{{ $product->product_price }}</p>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
@endsection

{{-- 
<div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div>
                    <div class="w-full h-72 bg-secondary border-primary border-2 rounded-3xl"></div> --}}
