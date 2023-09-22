<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chirper</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-slate-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/chirps') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Chirps</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex items-center gap-4">
                    <x-application-logo class="h-24 fill-current text-red-500 w-auto" />
                    <div>
                        <h1 class="text-4xl font-extrabold text-red-500">Chirper</h1>
                        <p class="text-gray-600">A micro messaging platform for <span class="text-red-500">web artisans</span>.</p>
                    </div>
                </div>

                @if (Route::has('login'))
                    <div class="flex mt-16 justify-center items-center gap-6">
                    @auth
                    <a href="{{ url('/chirps') }}" class="px-4 py-2 bg-red-500 text-white">Show me those Chirps!</a>
                    @else
                    <x-primary-link href="{{ route('login') }}">
                        {{ __('Log In') }}
                    </x-primary-link>

                        @if (Route::has('register'))

                        <x-secondary-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-secondary-link>
                        @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </body>
</html>
