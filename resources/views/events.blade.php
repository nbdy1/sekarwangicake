@extends('layouts.no_container')
@section('content')
    <div id="causeofoverflow" class="h-[90vh] pb-10 flex flex-col relative overflow-hidden">
        <div class="absolute h-full bg-red-500 w-screen overflow-hidden cover rounded-b-[12rem]">
            {{--
        <img
            src="https://picsum.photos/1000/500"
            class="w-full"
            alt=""
            srcset=""
        />
        --}}
            <img src="/images/kueindo.jpg" class="w-full overflow-hidden" alt="" srcset="" />
        </div>
        <div class="flex-col-reverse absolute px: z-10 left-0 bottom-28">
            <h2 class="block max-w-lg text-white text-2xl bg-primary bg-opacity-75 p-5 rounded-3xl mt-5">
                Join the fun of designing an Independence day related cake and win
                prizes
            </h2>
            <p
                class="block mt-5 text-xl rounded-full bg-secondary bg-opacity-75 border-primary border text-primary w-fit p-3">
                Starting from July 20 to August 17
            </p>
            <div class="flex flex-row mt-10 gap-x-5">
                <x-button>Join Now</x-button>
                <x-button style="secondary">More Info</x-button>
            </div>
        </div>
    </div>

    {{-- <div class="flex bg-primary justify-center p-3">
        <span data-text="UPCOMING EVENTS"
            class="text-6xl inline-flex uppercase rounded-xl bg-primary text-center dashed-shadow tracking-widest font-bold  font-baloo">
            UPCOMING EVENTS</span>

    </div>
    <div class="flex gap-x-10 px-4 md:px-8 xl:px-16 justify-center items-center mb-20 pb-20 bg-primary">
        <div
            class="flex flex-col w-1/3 relative bg-white border-4 rounded-3xl shadow-secondary shadow-brutal-xl group overflow-hidden border-primary h-[30rem]">
            <div class="h-full w-full cover">
                <img src="/images/kueindo.jpg" alt="" class="w-full h-full">
            </div>
            <div
                class="absolute w-full h-full bg-gradient-to-t from-secondary to-transparent opacity-0 group-hover:opacity-50">
            </div>
        </div>
        <div
            class="flex flex-col w-1/3 relative bg-white border-4 rounded-3xl shadow-secondary shadow-brutal-xl group overflow-hidden border-primary h-[30rem]">
            <div class="h-full w-full cover">
                <img src="/images/kueindo.jpg" alt="" class="w-full h-full">
            </div>
            <div
                class="absolute w-full h-full bg-gradient-to-t from-secondary to-transparent opacity-0 group-hover:opacity-50">
            </div>
        </div>
        <div
            class="flex flex-col w-1/3 relative bg-white border-4 rounded-3xl shadow-secondary shadow-brutal-xl group overflow-hidden border-primary h-[30rem]">
            <div class="h-full w-full cover">
                <img src="/images/kueindo.jpg" alt="" class="w-full h-full">
            </div>
            <div
                class="absolute w-full h-full bg-gradient-to-t from-secondary to-transparent transition-opacity opacity-0 group-hover:opacity-50">

            </div>
            <div class="relative flex flex-col left-4 bottom-1/2 z-10">
                <div class="">
                    <h1
                        class="font-baloo text-5xl w-full text-primary uppercase opacity-0 group-hover:opacity-100 absolute z-10 font-bold">
                        Mother's Day</h1>
                    <h1
                        class="font-baloo text-5xl w-full text-secondary uppercase opacity-0 group-hover:opacity-100 translate-x-[2px] translate-y-[2px] absolute font-bold">
                        Mother's Day</h1>
                    <x-button class=" w-fit">More Info</x-button>
                </div>



            </div>

        </div>

    </div> --}}
@endsection



{{-- [text-shadow:_6px_6px_0_rgb(131_13_152_/_100%)] --}}
