@extends('layouts.admin_main')
@section('content')
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

        <h1 class="text-4xl text-primary font-bold mb-3">Add Custom Cake</h1>
        <form method="POST" enctype="multipart/form-data"
            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            @csrf
            <div class="flex flex-col gap-5.5 p-6.5">
                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Name
                    </label>
                    <input autofocus value="{{ old('customCakeName') }}" required id="customCakeName" name="customCakeName"
                        type="text" placeholder="Cheese Cake"
                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary @error('simpleCakeName') !border-danger @enderror" />
                    @error('customCakeName')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Slug
                    </label>
                    <div class="flex flex-row gap-x-3"> <input value="{{ old('customCakeSlug') }}" required
                            id="customCakeSlug" name="customCakeSlug" type="text" placeholder="cheese-cake"
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary  @error('customCakeSlug') !border-danger @enderror" />
                        <button id="generateSlug" href="#"
                            class="inline-flex items-center justify-center rounded-md bg-primary py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                            Generate
                        </button>
                    </div>
                    @error('customCakeSlug')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror



                </div>
                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Cake Description
                    </label>
                    <textarea required name="customCakeDescription" rows="6"
                        placeholder="Indulge in the creamy decadence of our Cheese Cake. This delectable treat boasts velvety-smooth cheesecake with a generous layer of sweet cheese frosting. Topped with a delicate sprinkle of fine grated cheese, it's a perfect blend of sweet and tangy flavors. Ideal for any occasion, our Cheese Cake is a crowd-pleaser that will leave a lasting impression. Order yours today and savor the rich, cheesy goodness in every heavenly bite."
                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary  @error('customCakeDescription') !border-danger @enderror">{{ old('customCakeDescription') }}</textarea>
                    @error('customCakeDescription')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
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
                
                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Client Name
                    </label>
                    <input id="clientName" name="clientName"
                        type="text" placeholder="Client Name"
                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary @error('customCakeName') !border-danger @enderror" />
                    @error('customCakeName')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Client Avatar
                    </label>
                    <input id="file-input" name="image[]" type="file" multiple="true" 
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

                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">Cake Rating</label>
                    <div class="rate">
                        <input type="radio" id="ratingStar" name="ratingStar" value="1" />
                        <label for="star1" title="text">1 star</label>
                        <input type="radio" id="ratingStar" name="ratingStar" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="ratingStar" name="ratingStar" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="ratingStar" name="ratingStar" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="ratingStar" name="ratingStar" value="5" />
                        <label for="star5" title="text">5 stars</label>
                    </div>
                </div>

                <div>
                    <label class="mb-3 block font-medium text-sm text-black dark:text-white">
                        Testimonials
                    </label>
                    <textarea name="testimonialQuote" id ="testimonialQuote" rows="6"
                        placeholder="Ini testimonial :D"
                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary  @error('customCakeDescription') !border-danger @enderror">{{ old('customCakeDescription') }}</textarea>
                    @error('customCakeDescription')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit"
                    class="inline-flex items-center justify-center rounded-md bg-primary py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                    Add Custom Cake
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
