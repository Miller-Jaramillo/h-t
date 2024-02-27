<div wire:poll.5000ms>

    <!-- Enlaces a los estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts de Bootstrap y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Livewire Styles y Scripts -->
    @livewireStyles


    <div>
        <!-- Contenido del carousel -->
        <div
            class="mx-auto max-w-5xl  px-10 sm:px-6 lg:px-2  shadow-xl border-t border-b border-l border-r
            border-l-green-100 border-t-blue-100 border-b-pink-100 border-r-yellow-100
            rounded-xl dark:border-gray-950
            bg-gradient-to-r from-blue-100 to- dark:from-gray-500 dark:to-blue-950 ">
            <div class="mx-auto max-w-2xl py-2 sm:py-2 lg:max-w-none ">
                <div class=" lg:grid lg:grid-cols-2 lg:gap-x-1 lg:space-y-0">
                    @foreach ($rooms as $room)
                        <div class="group relative ">
                            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2 px-1 sm:px-2 py-1">
                                <div
                                    class="bg-gradient-to-br from-neutral-50 via-blue-50 to-blue-100 dark:from-neutral-950 dark:via-slate-900 dark:to-blue-900
                                    overflow-hidden shadow-xl sm:rounded-xl rounded-xl

                                    bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 ">
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 px-4 sm:px-6 py-2 ">
                                        <x-label
                                            class="dark:text-gray-200 text-gray-500  dark:font-medium uppercase tracking-wide flex justify-center">
                                            {{ $room->name }}
                                        </x-label>
                                        <div id="carousel_{{ $loop->index }}"
                                            class="mt-2 carousel slide flex motion-safe:hover:scale-[1.05] "
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                @foreach ($room->files as $index => $imagen)
                                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('storage/' . $imagen->ruta) }}"
                                                            class="block object-cover h-80 w-300 sm:rounded-lg rounded-md border-2 border-indigo-100"
                                                            alt="...">
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

                                        <div class="py-2 px-3">
                                            <x-label class="flex justify-left">
                                                Descripcion: {{ $room->description }}
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                Huespedes permitidos: {{ $room->no_guest }}
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                Habitaciones disponibles: {{ $room->no_room }}
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                Si te quedas despues de las 9:00AM te incluye desayuno
                                            </x-label>

                                        </div>

                                        <hr class="my-3 border-gray-700 sm:mx-auto dark:bg-gray-100 lg:my-3" />

                                        {{-- <div href="https://wa.me/573216656606/?text=Hola%20quiero%20hacer%20una%20reserva" class="flex justify-center">
                                            <x-button class=" bg-green-500 dark:bg-green-500">
                                                Reservar
                                            </x-button>
                                        </div> --}}

                                        <div class="flex justify-center pb-2">
                                            <a href="https://wa.me/573216656606/?text=Hola%20quiero%20hacer%20una%20reserva"
                                                target="_blank">
                                                <div
                                                    class=" h-6 w-6 bg-green-200 hover:bg-green-300 dark:bg-green-400 dark:hover:bg-green-300 flex items-center justify-center rounded-full flex motion-safe:hover:scale-[1.05]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                        height="40" fill="currentColor" class="bi bi-whatsapp"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                                    </svg>


                                                </div>

                                            </a>
                                            <a href="https://wa.me/573216656606/?text=Hola%20quiero%20hacer%20una%20reserva"
                                                target="_blank">
                                                <x-label class="flex justify-center"> Reservar</x-label>

                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts


</div>