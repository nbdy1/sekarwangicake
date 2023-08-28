<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sekarwangi Cake | Admin Home')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900&display=swap"
        rel="stylesheet">

    <!-- TailwindCSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href = "{{ asset('css/form.css') }}" rel="stylesheet">
</head>
<body class = "h-screen w-auto flex">
    <div class="h-auto md:w-36 lg:w-72">@include('partials._sidebar')</div>
    <div class="ml-10 mt-16">@yield('content')</div>
    
</body>
</html>