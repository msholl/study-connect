<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

    <nav class="bg-gray-100 border-b-2 border-blue-300 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('question.index')}}" class="flex items-center">
                <img src="{{url('study_connect.svg')}}" class="h-12 mr-3" alt="Logo" />
{{--                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>--}}
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-gray-100 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li class="pt-1 pb-2 pr-3 pl-3">
                        <x-nav-link :href="route('question.index')" :active="request()->routeIs('question.index')" class="text-[1em]">
                            {{ __('Início') }}
                        </x-nav-link>
                    </li>
                    <li class="pt-1 pb-2 pr-3 pl-3">
                        <x-nav-link :href="route('question.create')" :active="request()->routeIs('question.create')" class="text-[1em]">
                            {{ __('Criar pergunta') }}
                        </x-nav-link>
                    </li>
                    <li class="pt-1 pb-2 pr-3 pl-3">

                        <x-nav-link :href="route('question.create')" :active="request()->routeIs('question.create')" class="text-[1em]">
                            {{ __('Sobre nós') }}
                        </x-nav-link>
{{--                        <a href="#"--}}
{{--                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sobre Nós</a>--}}
                    </li>
                    <li class="font-bold">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                @if(Auth::user()) {{'Sair'}}
                                @else {{'Entrar'}}
                                @endif
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
{{--            <div>--}}
{{--                <a href="/">--}}
{{--                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="lg:w-[80%] mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">--}}
                {{ $slot }}
{{--            </div>--}}
        </div>

    </body>
</html>
