@extends('layouts.adminlayout')
@section('content')
<form action="/addcake" method="post" class="formaddcake" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <label for="pastryName"><b>Pastry Name</b></label>
        <input type = "text" name = "pastryName" class = "textfield">
        <label for="pastryPrice"><b>Pastry Price</b></label>
        <input type = "number" name = "pastryPrice" class = "textfield">
        <label for="pastryDescription"><b>Pastry Description</b></label>
        <input type = "text" name = "pastryDescription" class = "textfield">
        <label for="pastryImage"><b>Pastry Image</b></label><br>
        <input type = "file" name = "pastryImage" style="height:50px; margin-top: 1.5vh;">
        <br><label for="pastryTestimonial"><b>Testimonial</b></label>
        <input type = "text" name = "pastryTestimonial" class = "textfield"><br>
        <input type = "file" name = "testimonialImage" style="height:50px; margin-top: 1.5vh;">
        @include('partials._submitbutton')
    </div>
</form>

@endsection