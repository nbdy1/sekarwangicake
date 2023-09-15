@extends('layouts.main')
@section('content')
    <div class="container"></div>
    <div class="font-bold text-8xl ">

        <div class="flex ">
            <h1>Where Flour</h1><img src="images/image1.png" class="rounded-full w-23 h-20 ml-4">
        </div>
        <h1> and IMAGINATION</h1>

        <div class="flex flex-row gap-x-4 h-[96px]">
            <h1>Rise</h1>
            <div class="overflow-hidden relative rounded-1xl h-full w-1/6 cover bg-cover border rounded-2xl">
                <img src="images/image2.png">
            </div>
        </div>
        <br>
    </div>
    <div class="flex">
        <div class="about2 text-bold text-6xl">
            <h1> Cake dreams COME TRUE! We craft bespoke <br> cakes that celebrate you, turing every <br> occasion into a
                Sweet, unforgettable delight.
        </div>
    </div>
    <br>
    <div class="">
        <div class="about mb-10 overflow-x-hidden">
            <h1 class="font-bold text-8xl">Savor cake wonders for every occasion!</h1>
        </div>

        <div class=" font-baloo font-bold flex justify-between flex-row gap-x-10"
            style="color: #000;font-family: Noto Serif; font-size: 96px; font-style: normal;font-weight: 400; line-height: normal;">
            <h1 class="font-bold flex font-baloo">01<br>Fiction</h1>
            <div class="overflow-hidden relative rounded-2xl h-72 w-full cover bg-cover">
                <img src="images/image6.png" class="cover absolute -top-1/2">
            </div>

        </div>
        <div class="my-10 font-baloo font-bold flex justify-between flex-row-reverse gap-x-10"
            style="color: #000;font-family: Noto Serif; font-size: 96px; font-style: normal;font-weight: 400; line-height: normal;">

            <h1 class="font-bold flex font-baloo">02<br>Simplistic</h1>
            <div class="overflow-hidden relative rounded-2xl h-72 w-full cover bg-cover">
                <img src="images/image7.png" class="cover absolute -top-1/2">
            </div>

        </div>
        <div class=" font-baloo font-bold flex justify-between flex-row gap-x-10"
            style="color: #000;font-family: Noto Serif; font-size: 96px; font-style: normal;font-weight: 400; line-height: normal;">
            <h1 class="font-bold flex font-baloo">03<br>Holiday</h1>
            <div class="overflow-hidden relative rounded-2xl h-72 w-full cover bg-cover">
                <img src="images/image8.png" class="cover absolute -top-1/2">
            </div>

        </div>
    </div>
@endsection
