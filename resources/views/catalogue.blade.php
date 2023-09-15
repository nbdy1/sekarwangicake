@extends('layouts.main')
@section('content')
    <div class="pb-20 flex flex-col px-4 md:px-8 xl:px-16">
        <p class="text-6xl font-baloo font-bold text-primary my-6 text-center">Custom Cake Portfolio</p>
        <div class="flex flex-row gap-x-5 relative">
            @include('partials._catalogue_sidebar')
            <div class="flex-col flex relative w-full">
                <div class="flex-row bg-white flex sticky top-[6rem] py-5 gap-3 z-[100]">
                    <button
                        class="flex rounded-full text-black border-gray-500 text-lg font-medium text-center justify-center items-center px-5 gap-x-2 py-1">Sort
                        <i class="fa-solid fa-chevron-down"></i></button>
                    <button
                        class="flex rounded-full text-black border-gray-500 text-lg font-medium text-center justify-center items-center px-5 gap-x-2 py-1">Color
                        <i class="fa-solid fa-plus"></i>
                        <button
                            class="flex rounded-full text-black border-gray-500 text-lg font-medium text-center justify-center items-center px-5 gap-x-2 py-1">Themes
                            <i class="fa-solid fa-plus"></i></button>
                        <div
                            class="border-2 font-dm  border-gray-700 px-3 py-1 rounded-full font-medium flex justify-center items-center gap-x-1">
                            Holiday<i class="fa-solid fa-xmark"></i> </div>
                        <div
                            class="border-2 font-dm group hover:text-red-700 hover:border-red-700 border-gray-700 px-3 py-1 rounded-full font-medium flex justify-center items-center gap-x-1">
                            Wedding<i class="fa-solid fa-xmark hover:text-red-500"></i> </div>
                        <div
                            class="border-2 font-dm border-gray-700 px-3 py-1 rounded-full font-medium flex justify-center items-center gap-x-1">
                            Hobby<i class="fa-solid fa-xmark"></i> </div>
                </div>
                <div class="grid grid-cols:1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 w-full mt-5 pr-10">
                    @foreach ($products as $product)
                        <div class="flex flex-col w-full">
                            <div
                                class="w-full h-72 bg-secondary relative overflow-hidden flex justify-center items-center cover">
                                @if (!empty($product->product_images))
                                    @php
                                        $productImages = json_decode($product->product_images, true);
                                        $sortedImages = collect($productImages)
                                            ->sortBy('image')
                                            ->values()
                                            ->toArray();
                                    @endphp
                                    <img class="h-full" src="{{ asset($sortedImages[0]['image']) }}"
                                        alt="{{ $product->product_name }}">
                                @endif
                                {{-- <p
                                    class="absolute -right-5 top-0 z-10 origin-center bg-yellow-500 border-black  shadow-brutalh p-2 rotate-12">
                                    {{ $product->product_type }}</p> --}}
                                {{-- <ul class="absolute flex flex-wrap bottom-5 left-5 gap-2">

                                    @foreach ($product->themes as $theme)
                                        <li class="bg-black text-white px-2 py-1 rounded-full">{{ $theme->theme_name }}</li>
                                    @endforeach
                                </ul> --}}
                            </div>
                            <p class="text-lg font-dm font-medium leading-snug">{{ $product->product_name }}</p>
                            <p> {{ 'IDR ' . number_format($product->product_selling_price, 0, '', ',') }}</p>
                            <ul class="flex flex-wrap gap-1">
                                @foreach ($product->themes as $theme)
                                    <li class="bg-black text-white px-2 py-1 rounded-full">{{ $theme->theme_name }}</li>
                                @endforeach
                            </ul>


                            {{-- <pre>{{ $product->themes }}</pre> --}}
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
