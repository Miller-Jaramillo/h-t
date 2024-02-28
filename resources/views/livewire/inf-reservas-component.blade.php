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



                                        <div id="carousel_{{ $loop->index }}" class="mt-2 carousel slide flex motion-safe:hover:scale-[1.05] carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
                                            <div class="carousel-inner">
                                                @foreach ($room->files as $index => $imagen)
                                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('storage/' . $imagen->ruta) }}"
                                                            class="block object-cover w-full h-full sm:rounded-lg rounded-md border-2 border-indigo-100"
                                                            alt="...">
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





                                        <div class="py-2 px-3">
                                            <x-label class="flex justify-left h-16 overflow-hidden">
                                                Descripcion: {{ $room->description }}
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                Huespedes permitidos: {{ $room->no_guest }}
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                Habitaciones disponibles: {{ $room->no_room }}
                                            </x-label>



                                        </div>

                                        <hr class="my-3 border-gray-700 sm:mx-auto dark:bg-gray-100 lg:my-3" />

                                        {{-- <div href="https://wa.me/573216656606/?text=Hola%20quiero%20hacer%20una%20reserva" class="flex justify-center">
                                            <x-button class=" bg-green-500 dark:bg-green-500">
                                                Reservar
                                            </x-button>
                                        </div> --}}

                                        @foreach ($users as $user )
                                        <div class="flex justify-center pb-2">
                                            <a class="flex items-center" href="https://wa.me/57{{ $user->whatsapp }}/?text=Hola%20quiero%20hacer%20una%20reserva" target="_blank">
                                                <div class="h-6 w-6 bg-green-200 hover:bg-green-300 dark:bg-green-400 dark:hover:bg-green-300 flex items-center justify-center rounded-full flex motion-safe:hover:scale-[1.05]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" style="color: #128c7e" viewBox="0 0 24 24">
                                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                                    </svg>
                                                </div>
                                                <x-label class="ml-2">Reservar</x-label>
                                            </a>
                                        </div>
                                        @endforeach



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