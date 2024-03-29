<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}">

    <title>Recruiter Portal - {{env('APP_NAME')}}</title>

    <!-- Vue CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Vue CDN -->

    <!-- Modules -->
    @yield('css')
    @vite(['resources/sass/main.scss', 'resources/js/codebase/app.js'])
    <!-- Modules -->

</head>
<body>

<!-- Page Container -->
<div id="page-container" class="main-content-boxed">

    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- END Main Container -->

</div>
<!-- END Page Container -->

</body>
@yield('js')
</html>
