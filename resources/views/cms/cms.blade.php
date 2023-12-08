<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}">

    <title>Administration - {{env('APP_NAME')}}</title>

    <!-- App Stylesheet -->
    @vite('resources/sass/main.scss')
    <!-- App Stylesheet -->

</head>
<body>

<div id="app">
    <app></app>
</div>

</body>
<script>
    window.core = {
        UserInfo: null,
        APP_URL: '{{env('APP_URL')}}',
    };
    @if(auth()->guard('admin')->check())
        window.core.UserInfo = {!! auth()->guard('admin')->user() !!}
    @endif
</script>

@vite('resources/cms/app.js')
</html>
