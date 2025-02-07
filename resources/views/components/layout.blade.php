<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Try</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="bg-gray-200 h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">

                            <!-- Current: "", Default: "" -->
                            <!-- <a href="/" class="{{  (request()->is("/"))  ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium " aria-current="page">Home</a>
            <a href="/about" class="{{  (request()->is("about"))  ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium ">About</a>
            <a href="/contact" class="{{ (request()->is("contact"))  ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium ">Contact</a> -->
                            <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
                            <x-navlink href="/about" :active="request()->is('about')">About</x-navlink>
                            <x-navlink href="/jobs" :active="request()->is('jobs')">Jobs</x-navlink>
                            <x-navlink href="/jobCreate" :active="request()->is('tag')">Create Job</x-navlink>
                            <x-navlink href="/post" :active="request()->is('post')">Post</x-navlink>
                            <x-navlink href="/tag" :active="request()->is('tag')">tag</x-navlink>
                            <x-navlink href="/contact" :active="request()->is('contact')">Contact</x-navlink>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div class="relative ml-3">
                        <div>
                           @guest
                           <x-navlink href="/login" :active="request()->is('login')">Login</x-navlink>
                           <x-navlink href="/register" :active="request()->is('register')">Register</x-navlink>
                           @endguest
                           @auth
                           <form method="POST" action="/logout">
                            @csrf
                            <x-form-button>Logout</x-form-button>
                        </form>
                           @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="px-9">

        <h1 class="text-[50px] text-sky-400">{{ $heading }}</h1>
        {{ $slot }}
    </section>

</body>

</html>