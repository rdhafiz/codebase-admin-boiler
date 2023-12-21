<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO meta tags -->
    <title>{{env('APP_NAME')}}</title>
    <meta name="description" content="OSCE Course">
    <meta name="keywords" content="OSCE, Purple Med, Medical, Plab, Plab 1, Plab 2">
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
<body>

<!-- Page loading spinner -->
{{--<div class="page-loading active">--}}
{{--    <div class="page-loading-inner">--}}
{{--        <div class="page-spinner"></div>--}}
{{--        <span>Loading...</span>--}}
{{--    </div>--}}
{{--</div>--}}


<!-- Page wrapper -->
<main class="page-wrapper">
    @include('frontend.layout.widgets.header')

    @yield('content')

    @include('frontend.layout.widgets.footer')
</main>


</body>
@vite(['resources/js/frontend/purplemed.js',])
@yield('js')
</html>
