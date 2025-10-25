<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="">
    <link href="" rel="stylesheet" />


</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
            @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
            </a>

            @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-6xl">
                TTT
            </h1>
            <p class="mt-6 text-lg leading-8 sm:text-center">
                TTT 
            </p>
        </div>


        <div></div>



</body>

</html>