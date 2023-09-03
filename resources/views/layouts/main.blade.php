<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sekarwangi Cake')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900&display=swap"
        rel="stylesheet">

    <!-- TailwindCSS -->
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    {{-- favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">

</head>


<body>
    @include('partials._header')
    {{-- <div class="px-4 md:px-8 xl:px-16"> --}}
    <main class="">
        {{-- dont put overflow-x-hidden or y-hidden or any hidden on here because it can ruin sticky --}}
        @yield('content')
    </main>
    @include('partials._footer')
</body>

</html>
