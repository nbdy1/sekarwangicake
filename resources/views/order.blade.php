@extends('layouts.main')
@section('content')
    <div
        class="mt-[-10px] font-bold ml-[-10px] mr-[-10px] h-[100px] bg-[#830D98] font-baloo text-white text-center text-[50px] align-middle pt-[20px]">
        How to Order
    </div>
    <div class="ml-[35px] font-bold mt-[10px] mr-[20px]">
        <div class="text-[#830D98] font-baloo text-[48px] mb-[50px]">
            Custom cakes
            <div class="flex flex-col"></div>

            <img src="images/barbie_cake.jpg" class="w-[300px] h-[375px] rounded-[54px] float-left mr-[20px]" id="">
            <div class="font-dm text-[20px] font-bold text-justify mt-[30px]">
                Our Custom Cakes are completely customised based on your request and therefore we do not offer a specific
                cake design to immediately choose from.
                Instead we would like you to tell us what you want your Custom Cake to look like or even possibly share a
                sketch design you made.
                Since the range of complexity of what these Custom Cakes could be like are very wide, we do not offer a
                fixed price until a design of the custom cake has been made into an agreement from you and our admin.
                However for the most basic one we have a starting price of IDR. XXX,XXX.
            </div>
            <div class="flex flex-row gap-x-4">
                <x-button style="primary">Catalogue</x-button>
                <x-button style="secondary">Order Custom Cakes</x-button>
            </div>


        </div>
        <br />
        <hr class="solid">
        <br />
        <div class="text-[#830D98] text-[48px] text-right mb-[400px] font-baloo">
            Simple Cakes & Pastries
            <br />
            <div class="text-[20px] font-[bold] text-justify w-[70%] float-left mr-[35px] mt-[30px] font-dm">
                For these two types of products we do offer a fixed price based on the one labeled in the catalogue page.
                Generally all simple cakes are IDR. 175.000 each and our pastries are according to the label in the catalog.
            </div>
            <img src="sampleimage.jpg.jpg" id="w-[300px] h-[375px] float-right rounded-[54px]">
            <div class="float-left">
                <button
                    class="bg-[#830D98] rounded-[24px] w-[166px] h-[55px] text-white border-[none] font-dm text-[24px] font-[bold] shadow-[7px_7px_#000000]">Catalogue</button>
                <button
                    class="bg-[#DE95CB] w-[275px] h-[55px] text-black text-[24px] font-[bold] shadow-[7px_7px_#000000] ml-[10px] mt-[50px] rounded-[24px] border-[none] font-dm">Order
                    Custom Cakes</button>
            </div>
        </div>
        <hr class="solid">
    </div>
@endsection
