<div>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
        style="visibility: hidden; wire:poll>

    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/hotel.ico">
    <title>TERRANOVA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />


    <!-- Livewire Styles y Scripts -->


    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    </head>

    <body
        class="antialiased bg-gradient-to-br from-blue-50 via-white to-gray-100 dark:from-zinc-950 dark:via-blue-950  dark:to-zinc-950">

        {{-- --> acceso al login --}}
        <div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-2 mr-2 text-right z-10 ">

                    @auth
                        <a href="{{ route('homeAdmin') }}"
                            class="flex justify-center font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 no-underline text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 0 1 .75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 0 1 9.75 22.5a.75.75 0 0 1-.75-.75v-4.131A15.838 15.838 0 0 1 6.382 15H2.25a.75.75 0 0 1-.75-.75 6.75 6.75 0 0 1 7.815-6.666ZM15 6.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M5.26 17.242a.75.75 0 1 0-.897-1.203 5.243 5.243 0 0 0-2.05 5.022.75.75 0 0 0 .625.627 5.243 5.243 0 0 0 5.022-2.051.75.75 0 1 0-1.202-.897 3.744 3.744 0 0 1-3.008 1.51c0-1.23.592-2.323 1.51-3.008Z" />
                            </svg>

                            <label class="ml-1"> PANEL DE CONTROL</label>

                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="flex justify-center font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </a>


                    @endauth

                    <div class="flex justify-center">
                        <button id="toggleThemeButton"
                            class=" flex items-center justify-center p-2 rounded-xl transition duration-300 ease-in-out focus:outline-none"
                            style=" color: rgb(0, 153, 255);">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                            </svg>
                        </button>
                    </div>

                </div>
            @endif
        </div>

        {{-- --> logo --}}
        <div class="mx-auto max-w-7xl px-1 mt-2 ">
            <div class="flex justify-center items-center text-xl">
                {{-- !! logo Ligth --}}
                @foreach ($users as $user)
                    <div class="flex justify-center">
                        <img src="{{ $user->profile_photo_url }}"
                            class="dark:hidden h-20 w-20 rounded-full object-cover">
                        <img src="{{ $user->profile_photo_url }}"
                            class="hidden dark:block h-20 w-20 rounded-full object-cover">
                    </div>
                @endforeach


                {{-- !! logo dark --}}

                @foreach ($users as $user)
                    <label class="ml-3  text-2xl font-bold uppercase tracking-wide text-gray-900 dark:text-gray-100">
                        {{ $user->name }}👽
                    </label>
                @endforeach

            </div>
        </div>



        {{-- --> Menu de navegacion --}}

        <div class="flex justify-center lg:flex lg:gap-x-12 sm:flex sm:gap-x-12 mt-3">
            <a href="#home" wire:click="$set('section', 'all')"
                class="text-md font-semibold leading-6 dark:text-gray-100 text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path
                        d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                    <path
                        d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
            </a>
            <a href="#nosotros" wire:click="$set('section', 'about')"
                class="text-md font-semibold leading-6 dark:text-gray-100 text-gray-900 dark:hover:text-yellow-500 hover:text-indigo-500 "
                style="text-decoration: none">Sobre nosotros</a>
            <a href="#servicios" wire:click="$set('section', 'services')"
                class="text-md font-semibold leading-6 dark:text-gray-100 text-gray-900 dark:hover:text-green-500 hover:text-green-500"
                style="text-decoration: none">Nuestros servicios</a>
            <a href="#habitaciones" wire:click="$set('section', 'rooms')"
                class="text-md font-semibold leading-6 dark:text-gray-100 text-gray-900 dark:hover:text-blue-500 hover:text-blue-500"
                style="text-decoration: none">Habitaciones</a>
        </div>


        {{-- --> separador --}}
        <div class="mx-auto max-w-6xl border-b border-yellow-500 dark:border-gray-300 my-3"></div>



        {{-- --> label 1 --}}














        <div wire:poll.5000ms>

            @if ($section == 'all')
                <div class="mx-auto max-w-6xl">
                    <div style="display: flex; justify-content: space-between;">
                        <div class="flex justify-center">
                            <label
                                class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-2xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">BIENVENIDO
                                A LA FAMILIA TERRANOVA
                            </label>
                        </div>
                        <div style="margin-left: auto;">
                            <div class="flex mt-4 sm:justify-center sm:mt-0">

                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 21 16">
                                        <path
                                            d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                                    </svg>
                                    <span class="sr-only">Discord community</span>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 17">
                                        <path fill-rule="evenodd"
                                            d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Twitter page</span>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">GitHub account</span>
                                </a>
                            </div>
                        </div>
                    </div>







                </div>

                <div>


                    @livewire('public.about-us-component')

                </div>
                <div>
                    <x-label
                        class="  mx-auto max-w-6xl  mt-10 py-2 px-2 text-md uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                        Nuestros servicios😅</x-label>

                    @livewire('public.services-us-component')
                </div>

                <div>
                    <x-label
                        class="  mx-auto max-w-6xl  mt-10 py-2 px-2 text-md uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                        Habitaciones🛏️ </x-label>

                    @livewire('inf-reservas-component')
                </div>
            @elseif ($section == 'about')
                <div>
                    <x-label
                        class=" mx-auto max-w-6xl  mt-10 py-2 px-2 text-md uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">Conocenos☀️🏨❤️</x-label>

                    @livewire('public.about-us-component')
                </div>
            @elseif ($section == 'services')
                <div>
                    <x-label
                        class="  mx-auto max-w-6xl  mt-10 py-2 px-2 text-md uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">Nuestros
                        servicios😅</x-label>

                    @livewire('public.services-us-component')
                </div>
            @elseif ($section == 'rooms')
                <div>
                    <x-label
                        class="  mx-auto max-w-6xl  mt-10 py-2 px-2 text-md uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">Habitaciones🛏️
                    </x-label>

                    @livewire('inf-reservas-component')
                </div>
            @endif






            <!-- Livewire Scripts -->
            @livewireScripts


            {{-- @include('livewire.inf-reservas-component') --}}



        </div>







    </body>


    {{-- --> footer --}}
    @include('footer')

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

        .red-hover:hover path {
            fill: red;
        }

        .yellow-hover:hover path {
            fill: rgb(166, 22, 188);
        }


        .icon-blue path {
            fill: rgb(24, 109, 220);
        }

        .blue-hover:hover path {
            fill: rgb(24, 109, 220);
        }

        .green-hover:hover path {
            fill: rgb(0, 255, 38);
        }

        .icon-green path {
            fill: rgb(0, 255, 38);
        }

        .icon-oranch path {
            fill: rgb(255, 119, 0);
        }

        .icon-red path {
            fill: rgb(255, 0, 0);
        }


        .icon-blueclar path {
            fill: rgb(0, 200, 255);
        }

        .icon-oro path {
            fill: rgb(218, 165, 32);
        }
    </style>


</div>
