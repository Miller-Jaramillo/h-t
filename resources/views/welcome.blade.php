<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/hotel.ico">
    <title>TERRANOVA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />


    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body
    class="antialiased bg-gradient-to-br from-neutral-50 via-blue-100 to-white dark:from-neutral-950 dark:via-slate-900 dark:to-sky-900
    ">
    {{-- !! logo php
    <div class=" flex items-center justify-center ">
        <img src="/img/img5.png" alt="Imagen" width="1600" height="auto"> --}}
    {{-- class="flex motion-safe:hover:scale-[1.05]"> --}}
    {{-- </div> --}}


    <div class=" ">

        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-2 mr-2 text-right z-10 ">

                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Administrador</a>


                    {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif --}}
                    <div class="flex justify-center">
                        <button id="toggleThemeButton"
                            class=" flex items-center justify-center p-2 rounded-xl transition duration-300 ease-in-out focus:outline-none"
                            style=" color: rgb(0, 153, 255);">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                            </svg>
                        </button>
                    </div>

                @endauth
            </div>
        @endif

    </div>

    {{-- --> logo --}}
    <div class="mt-2 grid grid-cols-3 sm:grid-cols-1 ">


        <div class="">

            {{-- !! logo Ligth --}}
            <div class="flex justify-center">
                <img src="/img/img5.jpg" class="dark:hidden h-24 w-24 rounded-full object-cover">
            </div>

            {{-- !! logo dark --}}
            <div class="flex justify-center">
                <img src="/img/img5.jpg" class="hidden dark:block h-24 w-24 rounded-full object-cover">
            </div>


        </div>



        <div class="flex justify-center text-xl mt-1">
            <label class="dark:text-gray-300 text-gray-700  font-bold uppercase tracking-wide">
                Terranova hotel
            </label>
        </div>



        {{-- <div class="flex justify-center">
            <button id="toggleThemeButton"
                class=" flex items-center justify-center p-2 rounded-xl transition duration-300 ease-in-out focus:outline-none
                "
                style=" color: rgb(0, 153, 255);">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path
                        d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                </svg>
            </button>
        </div> --}}
    </div>
    <hr class="my-3 border-gray-700 sm:mx-auto dark:border-gray-600 lg:my-3" />

    <div
        class=" mt-3 flex justify-center lg:flex lg:gap-x-12 sm:flex sm:gap-x-12
        bg-gradient-to-br from-sky-200 via-sky-200 to-indigo-200 dark:from-neutral-950 dark:via-sky-900 dark:to-neutral-900">
        <a href="#" class="text-sm font-semibold leading-6 dark:text-gray-200 text-gray-800">¿Quienes somos?</a>
        <a href="#" class="text-sm font-semibold leading-6 dark:text-gray-200 text-gray-800">¿Donde estamos
            ubicados?</a>
    </div>



    {{-- <div class="">
            <div class="mx-auto max-w-7xl  sm:px-16 lg:px-16">
                <div class="mx-auto max-w-2xl py-2 sm:py-2 lg:max-w-none ">

                    <div class="space-y-12 lg:grid lg:grid-cols-1 lg:gap-x-6 lg:space-y-0">


                        <div class="group relative">
                            <h2 class="text-xl uppercase tracking-wide font-bold dark:text-green-100  text-gray-900">¿Quienes somos?</h2>



                            <h3 class="mt-1 text-sm dark:text-gray-400 text-gray-500 text-justify">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Terranova Aparta hotel, hace parte de la colección de hoteles nuevos en esta ciudad, ofrece una nueva alternativa de hospedaje, en un ambiente íntimo y acogedor, con un toque personalizado, ideal para el turismo corporativo y vacacional.
                                    Es un concepto dirigido aquellos viajeros que prefieren la privacidad, la comodidad y el dormir bien
                                </a>
                            </h3>


                            <div id="controls-carousel" class="mt-2 relative w-full" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 md:h-96 overflow-hidden rounded-lg">
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/img/img1.jpeg"
                                            class="absolute w-full transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                        <img src="/img/img2.jpg"
                                            class="absolute w-full transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/img/img3.jpg"
                                            class="absolute w-full transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>

                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>















                            <h3 class="mt-6 text-md dark:text-gray-400 text-gray-500 text-justify">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Terranova Aparta hotel, hace parte de la colección de hoteles nuevos en esta ciudad, ofrece una nueva alternativa de hospedaje, en un ambiente íntimo y acogedor, con un toque personalizado, ideal para el turismo corporativo y vacacional.
                                    Es un concepto dirigido aquellos viajeros que prefieren la privacidad, la comodidad y el dormir bien
                                </a>
                            </h3>
                            <p class="text-base font-semibold dark:text-gray-400 text-gray-900">Work from home
                                accessories
                            </p>
                        </div>

                    </div>


                </div>
            </div>

        </div> --}}


        <hr class="my-6 border-gray-700 sm:mx-auto dark:border-gray-600 lg:my-3" />


    <div class="mt-6 flex justify-center text-md ">
        <label class="dark:text-green-400 text-green-600  dark:font-medium uppercase tracking-wide">
            Reserva tu habitacion
        </label>
    </div>




    <div class="">
        <div class="mx-auto max-w-7xl px-10 sm:px-6 lg:px-2">
            <div class="mx-auto max-w-2xl py-5 sm:py-5 lg:max-w-none ">

                <div class="space-y-12 lg:grid lg:grid-cols-2 lg:gap-x-1 lg:space-y-0">

                    <div class="group relative">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2 px-4 sm:px-6 py-2">
                            <div
                                class="bg-gradient-to-br from-neutral-50 via-blue-50 to-blue-100 dark:from-neutral-950 dark:via-slate-900 dark:to-blue-900
                                 overflow-hidden shadow-xl sm:rounded-xl rounded-xl
                                            border border-b-sky-400 border-l-teal-400 border border-t-green-400 border-r-yellow-400 pb-2
                                             dark:border-b-sky-900 dark:border-l-teal-900 dark:border-t-green-800 dark:border-r-sky-600/50
                                             bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 ">

                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 px-4 sm:px-6 py-2">

                                    <label class="text-xl font-bold dark:text-green-100  text-gray-900">Nombre de la
                                        habitacion</label>





                                    <div id="controls-carousel" class=" relative w-full" data-carousel="static">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 md:h-96 overflow-hidden rounded-lg">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="/img/img1.jpeg"
                                                    class="absolute h-80 w-300 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                                                    sm:rounded-lg rounded-md border-2 border-indigo-100"
                                                    alt="...">
                                            </div>
                                            <!-- Item 2 -->
                                            <div class="hidden duration-100 ease-in-out" data-carousel-item="active">
                                                <img src="/img/img2.jpg"
                                                    class="absolute h-80 w-300 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                                                    sm:rounded-lg rounded-md border-2 border-indigo-100"
                                                    alt="...">
                                            </div>
                                            <!-- Item 3 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="/img/img3.jpg"
                                                    class="absolute h-80 w-300 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                                                    sm:rounded-lg rounded-md border-2 border-indigo-100"
                                                    alt="...">
                                            </div>

                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                                </svg>
                                                <span class="sr-only">Previous</span>
                                            </span>
                                        </button>
                                        <button type="button"
                                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-next>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>











                                    <h3 class="mt-1 text-sm dark:text-gray-400 text-gray-500">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Incluye jacuzzi
                                        </a>
                                    </h3>
                                    <p class="text-base font-semibold dark:text-gray-400 text-gray-900">La noche por
                                        $250,000
                                    </p>

                                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

                                    <div class="flex justify-center">
                                        <x-button class="dark:bg-green-500 bg-green-500">
                                            Reservar
                                        </x-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group relative">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2 px-4 sm:px-6 py-2">
                            <div
                                class="bg-gradient-to-br from-neutral-50 via-blue-100 to-rose-100 dark:from-neutral-950 dark:via-slate-900 dark:to-blue-900  bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900
                             overflow-hidden shadow-xl sm:rounded-xl rounded-xl
                                        border border-b-sky-400 border-l-teal-400 border border-t-green-400 border-r-yellow-400 pb-2
                                         dark:border-b-sky-900 dark:border-l-teal-900 dark:border-t-green-800 dark:border-r-sky-600/50 ">

                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 px-4 sm:px-6 py-2">

                                    <label class="text-xl font-bold dark:text-sky-100 text-gray-900">Habitacion Basica
                                    </label>







                                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 md:h-96 overflow-hidden rounded-lg">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="/img/img1.jpeg"
                                                    class="absolute h-80 w-300 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                                                    sm:rounded-lg rounded-md border-2 border-indigo-100"
                                                    alt="...">
                                            </div>
                                            <!-- Item 2 -->
                                            <div class="hidden duration-100 ease-in-out" data-carousel-item="active">
                                                <img src="/img/img2.jpg"
                                                    class="absolute h-80 w-300 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                                                    sm:rounded-lg rounded-md border-2 border-indigo-100"
                                                    alt="...">
                                            </div>
                                            <!-- Item 3 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="/img/img3.jpg"
                                                    class="absolute h-80 w-300 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                                                    sm:rounded-lg rounded-md border-2 border-indigo-100"
                                                    alt="...">
                                            </div>

                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                                </svg>
                                                <span class="sr-only">Previous</span>
                                            </span>
                                        </button>
                                        <button type="button"
                                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-next>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>







                                    <h3 class="mt-1 text-sm dark:text-gray-400 text-gray-500">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            No incluye jacuzzi
                                        </a>
                                    </h3>
                                    <p class="text-base font-semibold dark:text-gray-400 text-gray-900">La noche por
                                        $150,000
                                    </p>

                                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

                                    <div class="flex justify-center">
                                        <x-button class="dark:bg-green-500 bg-green-500">
                                            Reservar
                                        </x-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

















<footer class="">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <hr class="my-6 border-gray-700 sm:mx-auto dark:border-gray-600 lg:my-8" />

        <div class="md:flex md:justify-between">

            <div class="flex items-center">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="/img/jcboxs-dark.png"
                        class="ml-10 h-36 w-36 rounded-full object-cover dark:hidden" />

                        <img src="/img/jcboxs-ligth.png"
                        class="ml-10 h-36 w-36 rounded-full object-cover hidden dark:block" />
                </a>
            </div>





















            <div class="sm:flex sm:items-center sm:justify-between">

                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 mr-10">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-700 sm:mx-auto dark:border-gray-600 lg:my-8" />

        <div class="flex justify-center">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="/img/jcboxs-dark.png"
                    class="h-16 w-16 rounded-full object-cover dark:hidden" />

                    <img src="/img/jcboxs-ligth.png"
                    class="h-16 w-16 rounded-full object-cover hidden dark:block" />
            </a>
        </div>
        <div class="sm:flex sm:items-center sm:justify-center">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                    href="https://flowbite.com/" class="hover:underline">Hotel Terranova</a>. Desarrollado por
                JCBOXS.
            </span>

        </div>

    </div>
</footer>





</html>


<style>


/*
.bg-dots-darker {
    background-color: #DFDBE5;
    background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%239e6bee' fill-opacity='0.11' fill-rule='evenodd'/%3E%3C/svg%3E");
} */


.bg-dots-darker {
    background-color: #DFDBE5;
    background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%230ea5e9' fill-opacity='0.04' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3Ccircle cx='13' cy='13' r='3'/%3E%3C/g%3E%3C/svg%3E");
}

    .bg-center {
        background-position: center
    }

        .dark\:bg-dots-lighter {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")


        }
</style>
