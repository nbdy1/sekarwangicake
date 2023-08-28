@extends('layouts.adminlayout')
@section('content')
<form action="/addcake" method="post" enctype="multipart/form-data"> 
    @csrf
    @method('post')
    <div class="container">
        <label for="cakeName"><b>Cake Name</b></label>
        <input type = "text" name = "cakeName" class = "textfield">
        <label for="cakePrice"><b>Cake Price</b></label>
        <input type = "number" name = "cakePrice" class = "textfield">
        <label for="cakeDescription"><b>Cake Description</b></label>
        <input type = "text" name = "cakeDescription" class = "textfield">
        <label for="cakeImage"><b>Cake Image</b></label><br>
        <input type = "file" name = "cakeImage" style="height:50px; margin-top: 1.5vh;">
        <br><label for="cakeTestimonial"><b>Testimonial</b></label>
        <input type = "text" name = "cakeTestimonial" class = "textfield"><br>
        <input type = "file" name = "testimonialImage" style="height:50px; margin-top: 1.5vh;">
        <x-button style="primary">Save</x-button>
    </div>
</form>
@endsection