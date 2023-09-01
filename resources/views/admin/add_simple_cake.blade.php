@extends('layouts.admin_layout')
@section('content')
    <form action="/add-simple-cake" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="container flex flex-col">
            <div class="relative mb-3" data-te-input-wrapper-init>
                <input type="text"
                    class="peer block min-h-[auto] w-full rounded border-2 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleFormControlInput1" placeholder="Simple Cake Name" />
                <label for="exampleFormControlInput1"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Simple
                    Cake Name
                </label>
            </div>
            {{-- <label for="cakeName"><b>Cake Name</b></label>
            <input type="text" name="cakeName" class="textfield">
            <label for="cakePrice"><b>Cake Price</b></label>
            <input type="number" name="cakePrice" class="textfield">
            <label for="cakeDescription"><b>Cake Description</b></label>
            <input type="text" name="cakeDescription" class="textfield">
            <label for="cakeImage"><b>Cake Image</b></label><br>
            <input type="file" name="cakeImage" style="height:50px; margin-top: 1.5vh;">
            <br><label for="cakeTestimonial"><b>Testimonial</b></label>
            <input type="text" name="cakeTestimonial" class="textfield"><br>
            <input type="file" name="testimonialImage" style="height:50px; margin-top: 1.5vh;">
            <x-button style="primary">Save</x-button> --}}
        </div>
    </form>
@endsection
