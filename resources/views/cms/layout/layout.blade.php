<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}">

    <title>Administration - {{env('APP_NAME')}}</title>


    <!-- Vue CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Vue CDN -->

    <!-- Modules -->
    @yield('stylesheet')
    @vite(['resources/sass/main.scss'])
    <!-- Modules -->

</head>
<body>

<!-- Page Container -->
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll main-content-boxed">

    @include('cms.layout.include.sidebar')
    @include('cms.layout.include.header')

    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- END Main Container -->

    @include('cms.layout.include.footer')

</div>
<!-- END Page Container -->

</body>
@vite(['resources/js/lib/jquery.min.js', 'resources/js/codebase/app.js'])
@vite(['resources/js/cms/helper/header.js'])
@yield('js')
</html>
