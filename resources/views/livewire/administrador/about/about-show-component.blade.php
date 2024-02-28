<div wire:poll.5000ms>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Livewire Styles y Scripts -->
    @livewireStyles


    <div class="px-2">
        <!-- Contenido del carousel -->


        {{-- <div class="flex justify-center mt-3 py-3">

                <x-button class="mr-1 icon-blue green-hover" wire:click="editAbout({{ $about->id }})">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                        <path
                            d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                    </svg>
                    <x-label>Editar</x-label>
                </x-button>

            </div> --}}

        <div
            class="mx-auto max-w-5xl  px-10 sm:px-6 lg:px-2 shadow-xl rounded-xl
            bg-gradient-to-r from-blue-100 to- dark:from-gray-500 dark:to-blue-950">


            @if ($abouts->count())
                <div class="mx-auto max-w-2xl py-2 sm:py-2 lg:max-w-none ">
                    <div class=" lg:grid lg:grid-cols-1 lg:gap-x-1 lg:space-y-0">

                        @foreach ($abouts as $about)
                            <div class="group relative ">


                                <div class="flex justify-center">

                                    <button class="icon-blue green-hover" wire:click="editAbout({{ $about->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-4 h-4">
                                            <path
                                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                            <path
                                                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                        </svg>
                                    </button>
                                    <label class="text-xs text-gray-700 dark:text-gray-400"
                                        for="">Editar</label>

                                </div>

                                <div class="max-w-7xl mx-auto sm:px-2 lg:px-2 px-1 sm:px-2 py-1">

                                    <div
                                        class="bg-gradient-to-br from-neutral-50 via-blue-50 to-blue-100 dark:from-neutral-950 dark:via-slate-900 dark:to-blue-900
                                            overflow-hidden shadow-xl sm:rounded-xl rounded-xl

                                            bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 ">
                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 px-4 sm:px-6 py-2 ">


                                            <div id="carousel_{{ $loop->index }}" class="mt-2 carousel slide flex motion-safe:hover:scale-[1.05]" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach ($about->hotelFiles->chunk(2) as $index => $chunk)
                                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                            <div class="grid grid-cols-2 gap-2">
                                                                @foreach ($chunk as $imagen)
                                                                    <div class="{{ count($chunk) === 1 ? 'col-span-2 flex items-center justify-center' : '' }}">
                                                                        <img src="{{ asset('storage/' . $imagen->file_path) }}"
                                                                            class="block object-cover h-80 {{ count($chunk) === 1 ? 'w-full' : 'w-max sm:rounded-lg rounded-md' }} border-2 border-indigo-100 {{ count($chunk) === 1 ? 'mx-auto' : '' }}"
                                                                            alt="...">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!-- Botones de control del carousel -->
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel_{{ $loop->index }}" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel_{{ $loop->index }}" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>



                                            <div
                                                class="mt-2 py-2 mx-auto max-w-5xl  px-10 sm:px-6 lg:px-2 shadow-xl rounded-xl
                                            bg-blue-200 dark:bg-blue-900">

                                                <div class="py-2 px-3   mx-auto max-w-3xl flex justify-center">

                                                    <label
                                                        class="flex justify-left text-md  text-center font-semi-bold font-mono dark:text-gray-200 text-gray-600 ">
                                                        {{ $about->name }}
                                                    </label>
                                                </div>


                                                <div class="py-1 px-3   mx-auto max-w-3xl flex justify-center">

                                                    <label
                                                        class="flex justify-left text-md  text-center font-semi-bold font-mono dark:text-gray-200 text-gray-600 ">
                                                        {{ $about->description }}
                                                    </label>
                                                </div>



                                            </div>


                                            <hr class="my-3 border-gray-700 sm:mx-auto dark:bg-gray-100 lg:my-3" />

                                            {{-- <div href="https://wa.me/573216656606/?text=Hola%20quiero%20hacer%20una%20reserva" class="flex justify-center">
                                                    <x-button class=" bg-green-500 dark:bg-green-500">
                                                        Reservar
                                                    </x-button>
                                                </div> --}}


                                            <div class="flex mt-4 sm:justify-center sm:mt-0">
                                                <a href="{{ Auth::User()->facebook }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">

                                                    <!-- Facebook -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" style="color: #1877f2"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                                    </svg>
                                                    <span class="sr-only">Facebook page</span>
                                                </a>
                                                <a href="{{ Auth::User()->instagram }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                                    <!-- Instagram -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" style="color: #c13584"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                                    </svg>

                                                    <span class="sr-only">Instagram</span>
                                                </a>
                                                <a href="https://wa.me/57{{ Auth::User()->whatsapp }}/?text=Hola%20quiero%20hacer%20una%20reserva" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                                    <!-- Whatsapp -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" style="color: #128c7e"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                                    </svg>
                                                    <span class="sr-only">WhatsApp</span>
                                                </a>
                                                <a href="{{ Auth::User()->tiktok }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                                    <!-- TikTok -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"
                                                        style="color: #6a76ac">
                                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path fill="currentColor"
                                                            d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                                                    </svg>
                                                    <span class="sr-only">Tiktok</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="flex justify-center py-2">

                    <x-button class="mr-1 icon-blue green-hover" wire:click='openShowForm'>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                            <path
                                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                        </svg>
                        <x-label>Crear</x-label>
                    </x-button>
                </div>

                <div class="group relative ">
                    <div class="max-w-7xl mx-auto sm:px-2 lg:px-2 px-1 sm:px-2 py-1">

                        <div
                            class="bg-gradient-to-br from-neutral-50 via-blue-50 to-blue-100 dark:from-neutral-950 dark:via-slate-900 dark:to-blue-900
                            overflow-hidden shadow-xl sm:rounded-xl rounded-xl

                            bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 ">



                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 px-4 sm:px-6 py-2 ">

                                <div class="py-2 px-3">
                                    <x-label class="flex justify-left text-xl ">


                                        <span
                                            class="bg-gradient-to-r from-blue-500 to-green-500 bg-clip-text text-transparent">
                                            Crea tu tarjeta de presentacion.</span>
                                        <span class=" ">👽🚀</span>
                                    </x-label>
                                </div>


                                {{-- <x-label
                                class="dark:text-red-600 text-red-500  dark:font-medium uppercase tracking-wide flex justify-center">
                                Soy el Jara
                            </x-label> --}}



                                <div id="carousel" class="mt-2 carousel slide flex motion-safe:hover:scale-[1.05]"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <div
                                                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                                <img src="/img/ligth1.png"
                                                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                                    class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div
                                                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                                <img src="/img/img7.png"
                                                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                                    class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div
                                                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                                <img src="/img/img8.jpg"
                                                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                                    class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Botones de control del carousel -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>


                                <div class="mx-auto max-w-6xl border-b border-gray-200 dark:border-gray-700 my-3">
                                </div>

                                <div
                                class="mt-2 py-2 mx-auto max-w-5xl  px-10 sm:px-6 lg:px-2 shadow-xl rounded-xl
                                 bg-blue-200 dark:bg-blue-900">

                                <div class="py-2 px-3   mx-auto max-w-3xl flex justify-center">

                                    <label
                                        class="flex justify-left text-md  text-center font-semi-bold font-mono dark:text-gray-200 text-gray-600 ">
                                        Crafty
                                    </label>
                                </div>


                                <div class="py-1 px-3   mx-auto max-w-3xl flex justify-center">

                                    <label
                                        class="flex justify-left text-md  text-center font-semi-bold font-mono dark:text-gray-200 text-gray-600 ">
                                        ¡Bienvenidos al Hotel Crafty! Sumérgete en un oasis de comodidad y lujo,
                                        donde cada momento se convierte en una experiencia inolvidable. Nuestro
                                        compromiso es brindarte el mejor servicio para que tu estadía sea
                                        excepcional. ¡Bienvenido a tu hogar lejos de casa en el Hotel Crafty!
                                    </label>
                                </div>



                            </div>

                                <div class="mx-auto max-w-6xl border-b border-yellow-100 dark:border-yellow-100 my-3">
                                </div>

                                {{-- <div href="https://wa.me/573216656606/?text=Hola%20quiero%20hacer%20una%20reserva" class="flex justify-center">
                                    <x-button class=" bg-green-500 dark:bg-green-500">
                                        Reservar
                                    </x-button>
                                </div> --}}



                                <div class="flex pb-2 sm:justify-center sm:mt-0 pb-4">

                                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">

                                        <!-- Facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" style="color: #1877f2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                        </svg>
                                        <span class="sr-only">Facebook page</span>
                                    </a>
                                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                        <!-- Instagram -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" style="color: #c13584"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                        </svg>

                                        <span class="sr-only">Instagram</span>
                                    </a>
                                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                        <!-- Whatsapp -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" style="color: #128c7e"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                        </svg>
                                        <span class="sr-only">WhatsApp</span>
                                    </a>
                                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                        <!-- TikTok -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-7 w-7"
                                            style="color: #6a76ac">
                                            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path fill="currentColor"
                                                d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                                        </svg>
                                        <span class="sr-only">Tiktok</span>
                                    </a>

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>




    </div>

    <!-- Livewire Scripts -->
    @livewireScripts



    {{-- @include('livewire.inf-reservas-component') --}}

    @if ($showForm)
        <div class="container max-w-2xl mx-auto">
            <div id="floating-form" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-75 ">
                <div
                    class="bg-gray-100 dark:bg-gray-800 p-6 rounded-md dark:text-white text-gray-900 border border-indigo-800 max-w-7xl mx-auto max-h-full overflow-auto">



                    @livewire('administrador.about.about-form-card-component')


                    {{-- Botón de cancelar --}}
                </div>
            </div>
        </div>

        @livewireScripts
    @endif


    @if ($editForm)
        <div class="container max-w-4xl mx-auto">
            <div id="floating-form" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-75 ">
                <div
                    class="bg-gray-100 dark:bg-gray-800 p-6 rounded-md dark:text-white text-gray-900 border border-indigo-800 max-w-7xl mx-auto max-h-full overflow-auto">



                    <div>
                        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 pb-5">
                            <div class=" max-w-5xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">
                                <div
                                    class="pb-3 overflow-hidden shadow-xl  sm:rounded-xl rounded-xl
                                           dark:bg-blue-950">

                                    <div class=" max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">


                                        {{-- titulo formulario --}}
                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row mt-5">

                                            <div class="border-b border-gray-100  ">
                                                <h2
                                                    class="text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                                    Tarjeta de presentacion</h2>
                                                <p
                                                    class="mt-2 text-justify block text-sm font-medium leading-6 text-emerald-400 dark:text-emerald-700 tracking-widest">
                                                    Edita tu tarjeta.. se publicaran en la pagina principal
                                                </p>

                                            </div>
                                        </div>

                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row">

                                            <form wire:submit.prevent="update"> {{-- <form method="POST" action="{{ route('registrar-propuesta.submitForm') }}"> --}}

                                                {{-- inicio del grid --}}
                                                <div class="mt-2 grid grid-cols-1 sm:grid-cols-3   gap-x-10 ">
                                                    <div>
                                                        <x-label for="name"
                                                            class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                                            Titulo de tu presentación</x-label>
                                                        <div class="mt-1">
                                                            <x-input type="text" wire:model="name" name="name"
                                                                id="name" autocomplete="given-name"
                                                                class=" block w-full rounded-md border-0 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                                    text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase" />
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="mt-2">
                                                    <x-label for="description"
                                                        class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase">
                                                        Descripcion</x-label>
                                                    <p
                                                        class=" block text-sm font-medium leading-6 text-gray-400 dark:text-gray-700 tracking-widest">
                                                        Describe tu hotel</p>

                                                    <div class="relative">
                                                        <textarea wire:model="description" id="description" name="description"
                                                            class="resize-none block w-full rounded-md border-0 py-1.5 dark:bg-gray-900
                                                                 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                                 text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest
                                                                       h-10 // Altura inicial
                                                                       transition // Agrega transición para una expansión suave
                                                                       ease-in-out // Tipo de transición
                                                                       focus:h-32 // Altura al enfocar el textarea"></textarea>
                                                    </div>

                                                </div>










                                                <div class="mt-5 grid grid-cols-1 sm:grid-cols-1">
                                                    <div class="mt-4 ">
                                                        <x-label for="cover-photo"
                                                            class="text-xs font-semibold leading-6 dark:text-gray-100 text-gray-900 tracking-widest uppercase">
                                                            Fotos</x-label>

                                                        @if ($previews)
                                                            <div>
                                                                @foreach ($previews as $preview)
                                                                    <div
                                                                        class="mt-2 flex justify-center sm:rounded-lg rounded-md dark:bg-gray-900
                                                                                        border border-dashed border-indigo-900/25 dark:border-indigo-100/25 px-6 py-10">
                                                                        <div class="text-center ">
                                                                            @if ($preview['type'] === 'image')
                                                                                <img src="{{ $preview['url'] }}"
                                                                                    alt="Preview"
                                                                                    class="h-52 w-96 sm:rounded-lg rounded-md border-2 border-indigo-100">
                                                                            @elseif ($preview['type'] === 'video')
                                                                                <video controls
                                                                                    src="{{ $preview['url'] }}"
                                                                                    class="h-52 w-128 sm:rounded-lg rounded-md border-2 border-indigo-100"></video>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>

                                                        @endif

                                                        <div class="mt-2">
                                                            <input type="file" id="file" wire:model="files"
                                                                accept="image/*,video/*" multiple class="mt-1">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mt-4 flex justify-end">
                                                    <button wire:click="closeForm" type="button"
                                                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                                                        Cancelar
                                                    </button>
                                                    <x-button class="ml-2  dark:bg-green-400 bg-greem-600"
                                                     type="submit">Guardar</x-button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            @if ($message)
                                <div x-data="{ show: @entangle('message') }" x-show="show" x-init="setTimeout(() => { show = false; }, 3000)"
                                    class="fixed inset-0 flex items-center justify-center">
                                    <div
                                        class="bg-white dark:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg text-center">
                                        {!! $message !!}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>



                    {{-- Botón de cancelar --}}
                </div>
            </div>
        </div>

        @livewireScripts
    @endif


</div>
