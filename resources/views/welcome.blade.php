<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="icon" href="favicon.png" type="image/x-icon" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-slate-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="max-w-7xl mx-auto p-6 lg:p-8 z-10">
                <div class="flex items-center gap-4">
                    <x-application-logo class="h-24 fill-current text-red-500 w-auto" />
                    <div>
                        <h1 class="text-4xl font-extrabold text-red-500">Chirper</h1>
                        <p class="text-gray-600">A micro messaging platform for <span class="text-red-500">Web Artisans</span>.</p>
                    </div>
                </div>

                @if (Route::has('login'))
                    <div class="flex mt-8 justify-center items-center gap-6">
                    @auth
                    <x-secondary-link href="{{ url('/chirps') }}">{{ __('Show me those Chirps!') }}</x-primary-link>
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

            <div class="absolute z-0 opacity-50">
                <div class="w-80 h-80 rounded-full bg-red-500 animate-pulse opacity-5" style="filter: blur(100px)"/>
            </div>
        </div>
    </body>
</html>
