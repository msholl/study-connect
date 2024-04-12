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
    <body class="font-sans antialiased bg-gray-50 flex flex-col h-screen justify-between">


    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-start items-center">
                    <button
                        data-drawer-target="drawer-navigation"
                        data-drawer-toggle="drawer-navigation"
                        aria-controls="drawer-navigation"
                        class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <svg
                            aria-hidden="true"
                            class="hidden w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span class="sr-only">Toggle sidebar</span>
                    </button>
                    <!-- Logo -->
                    <a href="{{route('home')}}" class="flex items-center justify-between mr-4">
                        <img
                            src="study_connect_logo.svg"
                            class="mr-1 lg:mr-3 h-10 lg:h-12"
                            alt="Study Connect Logo"
                        />
                        <span class="self-center text-xl lg:text-2xl font-semibold whitespace-nowrap dark:text-white">Study Connect</span>
                    </a>
                    <!-- Navigation links -->
                    <ul class=" hidden py-2 lg:flex justify-center content-center lg:mr-4">
                        <li>
                            <a
                                href="{{route('home')}}"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:text-gray-500 dark:text-white dark:hover:text-blue-700"
                            >Início</a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:text-gray-500 dark:text-white dark:hover:text-blue-700"
                            >Quem Somos</a>
                        </li>
                        <li>
                            <a
                                href="{{route('question.index')}}"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:text-gray-500 dark:text-white dark:hover:text-blue-700"
                            >Ver Perguntas</a>
                        </li>
                    </ul>

                    <!-- Search bar -->
                    <form action="#" method="GET" class="hidden md:block md:pl-2">
                        <label for="topbar-search" class="sr-only">Buscar Perguntas</label>
                        <div class="relative md:w-64 lg:w-96">
                            <div
                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                            >
                                <svg
                                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    ></path>
                                </svg>
                            </div>
                            <input
                                type="text"
                                name="email"
                                id="topbar-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Buscar Perguntas"
                            />
                        </div>
                    </form>
                </div>
                <div class="flex items-center lg:order-2">
                    <button
                        type="button"
                        data-drawer-toggle="drawer-navigation"
                        aria-controls="drawer-navigation"
                        class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    >
                        <span class="sr-only">Toggle search</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                        </svg>
                    </button>
                    @if(Auth::check())

                        <button
                            type="button"
                            class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button"
                            aria-expanded="false"
                            data-dropdown-toggle="dropdown"
                        >
                            <span class="sr-only">Abrir menu</span>
                            <x-heroicon-c-user-circle class=" text-gray-500 bg-white w-8 h-8 rounded-full"/>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="hidden z-50 my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl" id="dropdown">
                            <div class="py-3 px-4">
                              <span class="block text-sm font-semibold text-gray-900 dark:text-white">
                                  {{ucfirst(Auth::user()->name)}}
                              </span>
                              <span class="block text-sm text-gray-900 truncate dark:text-white">
                                {{Auth::user()->email}}
                              </span>
                            </div>
                            <ul
                                class="py-1 text-gray-700 dark:text-gray-300"
                                aria-labelledby="dropdown"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                                    >Minha conta</a
                                    >
                                </li>
                            </ul>
                            <ul
                                class="py-1 text-gray-700 dark:text-gray-300"
                                aria-labelledby="dropdown"
                            >

                                <li>
                                    <a
                                        href="#"
                                        class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    ><svg
                                            class="mr-2 w-5 h-5 text-gray-400"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                                            ></path>
                                        </svg>
                                        Minhas perguntas</a>
                                </li>

                            </ul>
                            <ul
                                class="py-1 text-gray-700 dark:text-gray-300"
                                aria-labelledby="dropdown"
                            >
                                <li>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button
                                            type="submit"
                                            class="w-full my-2 text-left block py-2 px-4 text-sm text-red-900 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Sair
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    @else

                                <a
                                    href="{{route('login')}}"
                                    class="hidden lg:flex items-center p-2 text-base font-medium hover:text-gray-200 rounded-lg transition duration-75 bg-blue-700 text-gray-50 dark:hover:bg-gray-700 dark:text-white group"
                                >
                                    <span class="ml-3">Entrar / Cadastre-se</span>
                                    <x-tabler-arrow-narrow-right class="w-6 h-6 text-gray-50 hover:text-gray-200"/>
                                </a>
                    @endif

                </div>
            </div>
        </nav>
        <!-- Sidebar -->
        <aside
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Sidenav"
            id="drawer-navigation"
        >
            <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
                <form action="#" method="GET" class="md:hidden mb-2">
                    <label for="sidebar-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div
                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                        >
                            <svg
                                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                ></path>
                            </svg>
                        </div>
                        <input
                            type="text"
                            name="search"
                            id="sidebar-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search"
                        />
                    </div>
                </form>
                <ul class=" lg:hidden mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
                    <li>
                        <a
                            href="{{route('home')}}"
                            class="flex items-center pt-2 pb-0.5 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                        >
                            <span class="ml-3">Início</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="flex items-center pt-0.5 pb-0.5 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                        >
                            <span class="ml-3">Quem Somos</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{route('question.index')}}"
                            class="flex items-center pt-0.5 pb-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                        >
                            <span class="ml-3">Ver Perguntas</span>
                        </a>
                    </li>
                    @if(!Auth::user())
                        <li class="bg-gray-100 rounded-lg">
                            <a
                                href="{{route('login')}}"
                                class="flex items-center pt-2 pb-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                            >
                                <span class="ml-3">Entrar / Cadastre-se</span>
                            </a>
                        </li>
                    @endif

                </ul>
                <ul class="space-y-2 pt-2 mt-1 border-t border-gray-200 dark:border-gray-700">
                    <li>
                        <a
                            href="{{route('question.index')}}"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <x-heroicon-o-globe-alt class="w-6 h-6 text-gray-500 group-hover:text-gray-900"/>
                            <span class="ml-3">Todas perguntas</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/perguntas?categoria=programacao"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <x-heroicon-s-code-bracket class="w-6 h-6 text-gray-500 group-hover:text-gray-900" />
                            <span class="ml-3">Programação</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/perguntas?categoria=algoritmo"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <x-tabler-braces class="w-6 h-6 text-gray-500 group-hover:text-gray-900"/>
                            <span class="ml-3">Algoritmo</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/perguntas?categoria=matematica"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <x-tabler-math class="w-6 h-6 text-gray-500 group-hover:text-gray-900"/>
                            <span class="ml-3">Matemática</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/perguntas?categoria=dados"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <x-tabler-database class="w-6 h-6 text-gray-500 group-hover:text-gray-900"/>
                            <span class="ml-3">Dados</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/perguntas?categoria=rede"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <x-tabler-cloud-data-connection class="w-6 h-6 text-gray-500 group-hover:text-gray-900"/>
                            <span class="ml-3">Redes</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/perguntas?categoria=ia"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <x-tabler-robot class="w-6 h-6 text-gray-500 group-hover:text-gray-900"/>
                            <span class="ml-3">IA</span>
                        </a>
                    </li>
                </ul>
                <ul
                    class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700"
                >
                    <li>
                        <a
                            href="#"
                            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                        >
                            <svg
                                aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path
                                    fill-rule="evenodd"
                                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="ml-3">Docs</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="p-4 md:ml-64 h-auto pt-20">
            {{ $slot }}
        </main>
    </div>


        <x-layouts.footer />
    </body>
</html>
