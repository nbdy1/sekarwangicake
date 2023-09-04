@extends('layouts.admin_main')
@section('content')
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

        <h1 class="text-4xl text-primary font-bold mb-3">Add Simple Cake</h1>
        <form method="POST" enctype="multipart/form-data"
            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            @csrf
            <div class="flex flex-col gap-5.5 p-6.5">
                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Name
                    </label>
                    <input autofocus value="{{ old('simpleCakeName') }}" required id="simpleCakeName" name="simpleCakeName"
                        type="text" placeholder="Cheese Cake"
                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary @error('simpleCakeName') !border-danger @enderror" />
                    @error('simpleCakeName')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Slug
                    </label>
                    <div class="flex flex-row gap-x-3"> <input value="{{ old('simpleCakeSlug') }}" required
                            id="simpleCakeSlug" name="simpleCakeSlug" type="text" placeholder="cheese-cake"
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary  @error('simpleCakeSlug') !border-danger @enderror" />
                        <button id="generateSlug" href="#"
                            class="inline-flex items-center justify-center rounded-md bg-primary py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                            Generate
                        </button>
                    </div>
                    @error('simpleCakeSlug')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror



                </div>
                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Cake Description
                    </label>
                    <textarea required name="simpleCakeDescription" rows="6"
                        placeholder="Indulge in the creamy decadence of our Cheese Cake. This delectable treat boasts velvety-smooth cheesecake with a generous layer of sweet cheese frosting. Topped with a delicate sprinkle of fine grated cheese, it's a perfect blend of sweet and tangy flavors. Ideal for any occasion, our Cheese Cake is a crowd-pleaser that will leave a lasting impression. Order yours today and savor the rich, cheesy goodness in every heavenly bite."
                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary  @error('simpleCakeDescription') !border-danger @enderror">{{ old('simpleCakeDescription') }}</textarea>
                    @error('simpleCakeDescription')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Price
                    </label>
                    <input value="{{ old('simpleCakePrice') }}" required name="simpleCakePrice" type="text"
                        placeholder="25000"
                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary @error('simpleCakePrice') !border-danger @enderror" />
                    @error('simpleCakePrice')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div x-data="{ switcherToggle: false }">
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Discount?
                    </label>
                    <label for="toggle3" class="flex cursor-pointer select-none items-center">
                        <div class="relative">
                            <input name="isDiscount" type="checkbox" id="toggle3" class="sr-only"
                                @change="switcherToggle = !switcherToggle" />
                            <div class="block h-8 w-14 rounded-full bg-meta-9 dark:bg-[#5A616B]"></div>
                            <div :class="switcherToggle && '!right-1 !translate-x-full !bg-primary dark:!bg-white'"
                                class="dot absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full bg-white transition">
                                <span :class="switcherToggle && '!block'" class="hidden">
                                    <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                            fill="white" stroke="white" stroke-width="0.4"></path>
                                    </svg>
                                </span>
                                <span :class="switcherToggle && 'hidden'">
                                    <svg class="h-4 w-4 stroke-current" fill="none" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </label>
                </div>
                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Cake Images
                    </label>
                    <input id="file-input" name="image[]" type="file" multiple="true" required
                        class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-medium outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter dark:file:bg-white/30 dark:file:text-white file:py-3 file:px-5 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:focus:border-primary @error('image') !file:border-danger !border-danger @enderror @error('image.*') !file:border-danger !border-danger @enderror" />
                    @error('image')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                    @error('image.*')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                    <div id="thumb-output" class="flex flex-row gap-5 py-2">

                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center justify-center rounded-md bg-primary py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                    Add Simple Cake
                </button>
            </div>
        </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#file-input').on('change', function() { //on file input change
                    if (window.File && window.FileReader && window.FileList && window
                        .Blob) //check File API supported browser
                    {

                        var data = $(this)[0].files; //this file data

                        $.each(data, function(index, file) { //loop though each file
                            if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                                    .type)) { //check supported file type
                                var fRead = new FileReader(); //new filereader
                                fRead.onload = (function(file) { //trigger function on successful read
                                    return function(e) {
                                        var img = $('<img/>').addClass('max-h-35 block')
                                            .attr(
                                                'src',
                                                e.target.result); //create image element 
                                        $('#thumb-output').append(
                                            img); //append image to output element
                                    };
                                })(file);
                                fRead.readAsDataURL(file); //URL representing the file's data.
                            }
                        });

                    } else {
                        alert("Your browser doesn't support File API!"); //if File API is absent
                    }
                });
            });

            const name = document.querySelector('#simpleCakeName')
            const slug = document.querySelector('#simpleCakeSlug')
            const generateButton = document.querySelector('#generateSlug')

            name.addEventListener('change', function() {
                fetch('/admin/simple-cake/check-slug?name=' + name.value).then(response => response.json()).then(data =>
                    slug.value = data.slug)
            })

            generateButton.addEventListener('click', function(event) {
                event.preventDefault();
                fetch('/admin/simple-cake/check-slug?name=' + name.value).then(response => response.json()).then(data =>
                    slug.value = data.slug)
            })
        </script>
    @endsection
