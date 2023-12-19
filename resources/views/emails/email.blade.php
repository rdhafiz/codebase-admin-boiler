<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        .mail-body {
            width: 600px;
            display: table;
            margin: auto;
            border: 1px solid #e6e6e6;
            border-radius: 15px;
            font-family: 'Roboto', sans-serif;
        }

        header {
            width: 100%;
            display: block;
            padding: 25px;
            text-align: center;
            /* background: #ffffff; */
            border-radius: 10px;
        }

        header img {
            /*filter: brightness(100);*/
        }

        footer {
            width: 100%;
            display: block;
            padding: 15px;
            text-align: center;
            /*background: #ffffff;*/
        }

        footer ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: table;
            width: 100%;
        }

        footer ul li {
            width: 25%;
            display: table;
            float: left;
        }

        footer ul li a {
            width: 100%;
            display: block;
            text-align: center;
            text-decoration: none;
            color: #777777;
            padding: 10px;
        }

        footer ul li a:hover, footer ul li a:active {
            color: #4444;
        }

        main {
            width: 100%;
            min-height: 500px;
            display: block;
            padding: 50px;
            background: #f5f5f5;
        }

        .btn-theme {
            background: #9d175f;
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="mail-body">
    <header>
        <img width="200" src="{{asset('assets/images/logo.png')}}" alt="Purple Med Logo">
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <ul>
            <li><a class="nav-link fw-normal py-1 px-0" href="#">Help center</a></li>
            <li><a class="nav-link fw-normal py-1 px-0" href="#">Terms of service</a></li>
            <li><a class="nav-link fw-normal py-1 px-0" href="#">Legal</a></li>
            <li><a class="nav-link fw-normal py-1 px-0" href="#">Privacy policy</a></li>
        </ul>
    </footer>
</div>

</body>
</html>
