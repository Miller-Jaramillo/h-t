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




                                            <div id="carousel_{{ $loop->index }}"
                                                class="mt-2 carousel slide flex motion-safe:hover:scale-[1.05] "
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach ($about->hotelFiles->chunk(2) as $index => $chunk)
                                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                            <div class="grid grid-cols-2 gap-2">
                                                                @foreach ($chunk as $imagen)
                                                                    <div
                                                                        class="{{ count($chunk) === 1 ? 'col-span-2 flex items-center justify-center' : '' }}">
                                                                        <img src="{{ asset('storage/' . $imagen->file_path) }}"
                                                                            class="block object-cover h-80 w-max sm:rounded-lg rounded-md border-2 border-indigo-100 {{ count($chunk) === 1 ? 'mx-auto' : '' }}"
                                                                            alt="...">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!-- Botones de control del carousel -->
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carousel_{{ $loop->index }}" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carousel_{{ $loop->index }}" data-bs-slide="next">
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
                                                <a href="{{ $about->facebook }}"
                                                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                    <svg class="w-4 h-4" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 8 19">
                                                        <path fill-rule="evenodd"
                                                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span class="sr-only">Facebook page</span>
                                                </a>
                                                <a href="#"
                                                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                                    <svg class="w-4 h-4" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 21 16">
                                                        <path
                                                            d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                                                    </svg>
                                                    <span class="sr-only">Discord community</span>
                                                </a>
                                                <a href="#"
                                                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                                    <svg class="w-4 h-4" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 20 17">
                                                        <path fill-rule="evenodd"
                                                            d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span class="sr-only">Twitter page</span>
                                                </a>
                                                <a href="#"
                                                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                                    <svg class="w-4 h-4" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 20 20">
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
                                            Crea tu presentacion.</span>
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



                                <div class="flex pb-2 sm:justify-center sm:mt-0">
                                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 8 19">
                                            <path fill-rule="evenodd"
                                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Facebook page</span>
                                    </a>
                                    <a href="#"
                                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 21 16">
                                            <path
                                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                                        </svg>
                                        <span class="sr-only">Discord community</span>
                                    </a>
                                    <a href="#"
                                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 17">
                                            <path fill-rule="evenodd"
                                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Twitter page</span>
                                    </a>
                                    <a href="#"
                                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
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
                    <button wire:click="closeForm">Cancelar</button>
                </div>
            </div>
        </div>

        @livewireScripts
    @endif


    @if ($editForm)
        <div class="container max-w-6xl mx-auto">
            <div id="floating-form" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-75 ">
                <div
                    class="bg-gray-100 dark:bg-gray-800 p-6 rounded-md dark:text-white text-gray-900 border border-indigo-800 max-w-7xl mx-auto max-h-full overflow-auto">



                    <div>
                        <div class="mt-5 max-w-6xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 pb-5">
                            <div class=" max-w-5xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">
                                <div
                                    class="pb-3 bg-white dark:bg-gray-900 overflow-hidden shadow-xl  sm:rounded-xl rounded-xl
                                            border border-b-indigo-400 border-l-indigo-400 border border-t-emerald-400 border-r-emerald-400 pb-2
                                            dark:border-b-indigo-900 dark:border-l-indigo-900 dark:border-t-emerald-900 dark:border-r-emerald-900">

                                    <div class=" max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">


                                        {{-- titulo formulario --}}
                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row mt-5">

                                            <div class="border-b border-gray-100 pb-2  ">
                                                <h2
                                                    class="text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                                    About</h2>
                                                <p
                                                    class="mt-2 text-justify block text-sm font-medium leading-6 text-emerald-400 dark:text-emerald-700 tracking-widest">
                                                    Dinos quien eres.. se publicaran en la pagina principal
                                                </p>

                                            </div>
                                        </div>

                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row">

                                            <form wire:submit.prevent="update"> {{-- <form method="POST" action="{{ route('registrar-propuesta.submitForm') }}"> --}}

                                                {{-- inicio del grid --}}
                                                <div class="mt-5 grid grid-cols-1 sm:grid-cols-3   gap-x-10 ">
                                                    <div>
                                                        <x-label for="name"
                                                            class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                                            Nombre del hotel</x-label>
                                                        <div class="mt-1">
                                                            <x-input type="text" wire:model="name" name="name"
                                                                id="name" autocomplete="given-name"
                                                                class=" block w-full rounded-md border-0 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                                    text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase" />
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="">
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
                                                    <button type="submit">Guardar</button>
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
