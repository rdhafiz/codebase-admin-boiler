<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO meta tags -->
    <title>{{env('APP_NAME')}}</title>
    <meta name="description" content="OSCE Course">
    <meta name="keywords" content="OSCE Course, OSCE, Purple Med, Medical, Medics, Plab, Plab 1, Plab 2">
    <meta name="author" content="MediprospectsAI Ltd">

    <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}">

    <!-- Import Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">


    <!-- Modules -->
    @vite(['resources/sass/frontend/theme/theme.scss'])
    @yield('stylesheet')
    <!-- Modules -->

</head>
<body class="side-scroll">

<div class="pre-loader" id="preLoader">
    <svg width="100px" height="100px" viewBox="0 0 54 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
        <defs></defs>
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
            <path class="beat-loader" d="M0.5,38.5 L16,38.5 L19,25.5 L24.5,57.5 L31.5,7.5 L37.5,46.5 L43,38.5 L53.5,38.5" id="Path-2" stroke-width="2" sketch:type="MSShapeGroup"></path>
        </g>
    </svg>
</div>

<!-- Page wrapper -->
<main class="page-wrapper">
    @include('frontend.layout.widgets.header')

    @yield('content')

    @include('frontend.layout.widgets.footer')
</main>

</body>
@vite(['resources/js/frontend/purplemed.js'])
@yield('js')
</html>
