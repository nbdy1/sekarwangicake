@extends('layouts.main')
@section('content')
    <div class="pb-20 flex flex-col px-4 md:px-8 xl:px-16">
        @if ($product->product_type == 'simple_cake' || $product->product_type == 'pastry')
            <div class="flex-row flex gap-6 p-6 bg-white rounded-2xl">
                @if (!empty($product->product_images))
                    @php
                        $productImages = json_decode($product->product_images, true);
                        $sortedImages = collect($productImages)
                            ->sortBy('image')
                            ->values()
                            ->toArray();
                    @endphp
                    <div class="flex-col max-w-[40%] flex gap-y-2">
                        <div class=" aspect-square border-primary rounded-lg cover overflow-hidden">
                            <img class="w-full" src="{{ asset($sortedImages[0]['image']) }}"
                                alt="{{ $product->product_name }}">
                        </div>
                        <div class="flex flex-row gap-x-2">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($product->product_images as $image)
                                <div
                                    class="w-full h-20 cover flex justify-center items-center rounded-lg overflow-hidden bg-[url(/{{ $image->image }})]">
                                    <img src="/{{ $image->image }}" alt="{{ $product->product_name }}.$i++">
                                </div>
                            @endforeach
                        </div>

                    </div>
                @endif
                <div class="flex flex-col justify-evenly">
                    <div class="flex flex-col gap-3">
                        <h1 data-text="{{ $product->product_name }}"
                            class="text-6xl inline-flex rounded-xl bg-white bg-clip-text dashed-shadow font-bold font-baloo">
                            {{ $product->product_name }}</h1>
                        <div class="rounded-lg text-base px-2 py-1 bg-secondary max-w-fit mb-3">
                            @if ($product->product_type === 'simple_cake')
                                Simple Cake
                            @else
                                pastry
                            @endif
                        </div>
                        <div class="flex-row flex gap-x-1 justify-start">
                            <p class="text-2xl font-medium text-black">
                                {{ 'IDR ' . number_format($product->product_selling_price, 0, '', ',') }}</p>
                            <p class="text-lg line-through font-medium text-gray-500">
                                {{ 'IDR ' . number_format($product->product_selling_price, 0, '', ',') }}</p>

                        </div>
                    </div>


                    <p class="text-lg font-medium text-black flex max-w-2xl">
                        Indulge in the creamy decadence of our Cheese Cake. This delectable treat boasts velvety-smooth
                        cheesecake with a generous layer of sweet cheese frosting. Topped with a delicate sprinkle of fine
                        grated cheese, it's a perfect blend of sweet and tangy flavors. Ideal for any occasion, our Cheese
                        Cake is a crowd-pleaser that will leave a lasting impression. Order yours today and savor the rich,
                        cheesy goodness in every heavenly bite.
                    </p>

                </div>

            </div>
            <x-button style="primary">Order Now
                <i class="fa-brands text-3xl fa-whatsapp"></i>
            </x-button>
            <div class="flex flex-col mt-20">
                <h2 class="font-baloo text-5xl font-bold text-primary">Similar Products</h2>
            </div>


            <!-- Render content for simple_cake or pastry -->
        @elseif ($product->product_type == 'custom_cake')
            <!-- Render content for custom_cake -->
        @else
            <!-- Render content for other product types (if needed) -->
            <div>{{ $product->product_name }}</div>
            <div>Product is invalid</div>
        @endif

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
