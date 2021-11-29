
<!-- Stored in resources/views/layouts/master.blade.php -->
<html lang="en">
<head>
    <title>Slovak MX federation - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="/tailwind.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/10f01015b7.js" crossorigin="anonymous"></script>

        <meta charset="UTF-8">
<body class="bg-gray-400">
<header class="bg-gray-500 text-blue-300 text-3xl flex flex-wrap items-center mx-auto">
    <img src="" alt="Logo" class="logo w-16 " >
    <ul class="menu flex-grow">
        <li id="main" class="flex flex-wrap" ><a href="/">Main</a></li>
        <li id="kalendar" class="flex flex-wrap"><a  href="/kalendar">Kalendar</a></li>
        <li id="tabulka" class="flex flex-wrap"><a  href="/riders">Tabulka</a></li>
        <li id="trate" class="flex flex-wrap"><a  href="/trate">Trate</a></li>
    </ul>
    <div class="search ">
        <input type="text" placeholder="Search" class="border-blue-300 ring-2 placeholder-blue-300 focus:ring-black focus:placeholder-black">
    </div>
    @if(Auth::check())
        <a href="/logout" class="p-1 ml-4 text-xl border-blue-300 ring-2 hover:bg-gray-400">Logout</a>
    @endif
    @if(Auth::guest())
    <a href="/login" class="p-1 ml-4 text-xl border-blue-300 ring-2 hover:bg-gray-400">Login</a>
    <a href="/register" class="p-1 ml-4 text-xl border-blue-300 ring-2 hover:bg-gray-400">Register</a>
    @endif

</header>
</head>
<div>
    @yield('content')
</div>

    </div>
    <footer class="px-4 py-8 bg-gray-600 text-coolGray-600 text-blue-300">
        <div class="container flex flex-wrap items-center justify-center mx-auto space-y-4 sm:justify-between sm:space-y-0">
            <div class="flex flex-row pr-3 space-x-4 sm:space-x-8">

                <ul class="flex flex-wrap items-center space-x-4 sm:space-x-8">
                    <li>
                        <a href="#">Terms of Use</a>
                    </li>
                    <li>
                        <a href="#">Privacy</a>
                    </li>
                </ul>
            </div>
            <ul class="flex flex-wrap pl-3 space-x-4 sm:space-x-8">
                <li>
                    <i class="fab fa-instagram"></i>
                    <a href="#">Instagram</a>
                </li>
                <li>
                    <i class="fab fa-facebook-square"></i>
                    <a href="#">Facebook</a>
                </li>
                <li>
                    <i class="fab fa-twitter-square"></i>
                    <a href="#">Twitter</a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>

