@extends('layouts.adminlayout')
@section('content')
<br>
<form action="/addcake" method="post" class="formaddcake" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <label for="cakeName"><b>Cake Name</b></label>
        <input type = "text" name = "cakeName" class = "textfield">
        <label for="cakeDescription"><b>Cake Description</b></label>
        <input type = "text" name = "cakeDescription" class = "textfield">
        <label for="cakeImage"><b>Cake Image</b></label><br>
        <input type = "file" name = "cakeImage" style="height:50px; margin-top: 1.5vh;">
        <br><label for="cakeTestimonial"><b>Testimonial</b></label>
        <input type = "text" name = "cakeTestimonial" class = "textfield"><br>
        <input type = "file" name = "testimonialImage" style="height:50px; margin-top: 1.5vh;">
        @include('partials._submitbutton')
    </div>
</form>

@endsection
