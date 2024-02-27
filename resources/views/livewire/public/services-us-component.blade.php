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
        @if ($services->count())
            <!-- Contenido del carousel -->
            <div
                class="mx-auto max-w-5xl  px-10 sm:px-6 lg:px-2  shadow-xl border-t border-b border-l border-r
                border-l-green-100 border-t-blue-100 border-b-pink-100 border-r-yellow-100
                rounded-xl dark:border-gray-950
                bg-gradient-to-r from-blue-100 to- dark:from-gray-500 dark:to-blue-950 ">
                <div class="mx-auto max-w-2xl py-2 sm:py-2 lg:max-w-none ">

                    <div class=" lg:grid lg:grid-cols-3 lg:gap-x-1 lg:space-y-0">
                        @foreach ($services as $service)
                            <div class="group relative ">
                                <div class="max-w-7xl mx-auto sm:px-2 lg:px-2 px-1 sm:px-2 py-1">
                                    <div
                                        class="bg-gradient-to-br from-neutral-50 via-blue-50 to-blue-100 dark:from-neutral-950 dark:via-slate-900 dark:to-blue-900
                                         overflow-hidden shadow-xl sm:rounded-xl rounded-xl

                                             bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 ">
                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 px-4 sm:px-6 py-2 ">
                                            <x-label
                                                class="dark:text-gray-200 text-gray-500  dark:font-medium uppercase tracking-wide flex justify-center">
                                                {{ $service->name }}
                                            </x-label>
                                            <div id="carousel_{{ $loop->index }}"
                                                class="mt-2 carousel slide flex motion-safe:hover:scale-[1.05]  "
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner ">
                                                    @foreach ($service->services as $index => $imagen)
                                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                            <img src="{{ asset('storage/' . $imagen->file_path) }}"
                                                                class="block object-cover rounded-full  h-72 w-72  border-2 border-indigo-100"
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
                                                    Descripcion: {{ $service->description }}
                                                </x-label>

                                                <x-label class="flex justify-left">
                                                    Huespedes permitidos: {{ $service->status }}
                                                </x-label>

                                                <x-label class="flex justify-left">
                                                    {{ $service->happy_message }}
                                                </x-label>



                                            </div>

                                            <hr class="my-3 border-gray-700 sm:mx-auto dark:bg-gray-100 lg:my-3" />



                                            <div class="flex justify-center pb-2"
                                                wire:click="deleteService({{ $service->id }})">
                                                <x-button class="ml-1 red-hover icon-red hover:bg-red-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="w-10 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <x-label>Eliminar</x-label>
                                                </x-button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div
                class="mx-auto max-w-5xl  px-10 sm:px-6 lg:px-2  shadow-xl border-t border-b border-l border-r
                     border-l-green-100 border-t-blue-100 border-b-pink-100 border-r-yellow-100
                     rounded-xl dark:border-gray-950
                     bg-gradient-to-r from-blue-100 to- dark:from-gray-500 dark:to-blue-950 ">
                <div class="mx-auto max-w-2xl py-2 sm:py-2 lg:max-w-none ">


                    <div class=" lg:grid lg:grid-cols-3 lg:gap-x-1 lg:space-y-0">
                        <div class="group relative ">
                            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2 px-1 sm:px-2 py-1">
                                <div
                                    class="bg-gradient-to-br from-neutral-50 via-blue-50 to-blue-100 dark:from-neutral-950 dark:via-slate-900 dark:to-blue-900
                                     overflow-hidden shadow-xl sm:rounded-xl rounded-xl bg-center
                                     bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 ">
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 px-4 sm:px-6 py-2 ">
                                        <x-label
                                            class="dark:text-gray-200 text-gray-500  dark:font-medium uppercase tracking-wide flex justify-center">
                                            Marketing
                                        </x-label>
                                        <div id="carousel"
                                            class="mt-2 carousel slide flex motion-safe:hover:scale-[1.05]  "
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner ">
                                                <div class="carousel-item active">
                                                    <img src="/img/crafty-2.jpg"
                                                        class="block object-cover rounded-full  h-72 w-72  border-2 border-indigo-100"
                                                        alt="...">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="/img/crafty-3.jpg"
                                                        class="block object-cover rounded-full  h-72 w-72  border-2 border-indigo-100"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <!-- Botones de control del carousel -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                        <div class="py-2 px-3">
                                            <x-label class="flex justify-left">
                                                "Nuestro servicio de marketing digital aumenta la visibilidad y las
                                                ventas mediante estrategias personalizadas de SEO, redes sociales y
                                                email marketing."
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                Disponibles ... 🚀👽
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                "¡Haz que cada día cuente!" 😎
                                            </x-label>



                                        </div>

                                        <hr class="my-3 border-gray-700 sm:mx-auto dark:bg-gray-100 lg:my-3" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="group relative ">
                            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2 px-1 sm:px-2 py-1">
                                <div
                                    class="bg-gradient-to-br from-neutral-50 via-blue-50 to-blue-100 dark:from-neutral-950 dark:via-slate-900 dark:to-blue-900
                                     overflow-hidden shadow-xl sm:rounded-xl rounded-xl bg-center
                                     bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 ">
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 px-4 sm:px-6 py-2 ">
                                        <x-label
                                            class="dark:text-gray-200 text-gray-500  dark:font-medium uppercase tracking-wide flex justify-center">
                                            Marketing
                                        </x-label>
                                        <div id="carousel"
                                            class="mt-2 carousel slide flex motion-safe:hover:scale-[1.05]  "
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner ">
                                                <div class="carousel-item active">
                                                    <img src="/img/crafty-2.jpg"
                                                        class="block object-cover rounded-full  h-72 w-72  border-2 border-indigo-100"
                                                        alt="...">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="/img/crafty-3.jpg"
                                                        class="block object-cover rounded-full  h-72 w-72  border-2 border-indigo-100"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <!-- Botones de control del carousel -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                        <div class="py-2 px-3">
                                            <x-label class="flex justify-left">
                                                "Nuestro servicio de marketing digital aumenta la visibilidad y las
                                                ventas mediante estrategias personalizadas de SEO, redes sociales y
                                                email marketing."
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                Disponibles ... 🚀👽
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                "¡Haz que cada día cuente!" 😎
                                            </x-label>



                                        </div>

                                        <hr class="my-3 border-gray-700 sm:mx-auto dark:bg-gray-100 lg:my-3" />
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="group relative ">
                            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2 px-1 sm:px-2 py-1">
                                <div
                                    class="bg-gradient-to-br from-neutral-50 via-blue-50 to-blue-100 dark:from-neutral-950 dark:via-slate-900 dark:to-blue-900
                                     overflow-hidden shadow-xl sm:rounded-xl rounded-xl bg-center
                                     bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 ">
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 px-4 sm:px-6 py-2 ">
                                        <x-label
                                            class="dark:text-gray-200 text-gray-500  dark:font-medium uppercase tracking-wide flex justify-center">
                                            Marketing
                                        </x-label>
                                        <div id="carousel"
                                            class="mt-2 carousel slide flex motion-safe:hover:scale-[1.05]  "
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner ">
                                                <div class="carousel-item active">
                                                    <img src="/img/crafty-2.jpg"
                                                        class="block object-cover rounded-full  h-72 w-72  border-2 border-indigo-100"
                                                        alt="...">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="/img/crafty-3.jpg"
                                                        class="block object-cover rounded-full  h-72 w-72  border-2 border-indigo-100"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <!-- Botones de control del carousel -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                        <div class="py-2 px-3">
                                            <x-label class="flex justify-left">
                                                "Nuestro servicio de marketing digital aumenta la visibilidad y las
                                                ventas mediante estrategias personalizadas de SEO, redes sociales y
                                                email marketing."
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                Disponibles ... 🚀👽
                                            </x-label>

                                            <x-label class="flex justify-left">
                                                "¡Haz que cada día cuente!" 😎
                                            </x-label>



                                        </div>

                                        <hr class="my-3 border-gray-700 sm:mx-auto dark:bg-gray-100 lg:my-3" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts


    {{-- @include('livewire.inf-reservas-component') --}}


    {{--
    <div class="bg-div bg-gray-100 h-32 mt-4"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const colorSelector = document.getElementById('colorSelector');
            const bgDiv = document.querySelector('.bg-div');

            colorSelector.addEventListener('change', function() {
                const selectedColor = colorSelector.value;
                bgDiv.classList.remove('bg-gray-100', 'bg-red-500', 'bg-blue-500', 'bg-teal-500');
                bgDiv.classList.add(`bg-${selectedColor}`);
            });
        });
    </script>

    <div class="flex items-center space-x-4">
        <label for="colorSelector" class="text-gray-700">Selecciona un color:</label>
        <select id="colorSelector" class="rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            <option value="gray-100">Gris</option>
            <option value="red-500">Rojo</option>
            <option value="blue-500">Azul</option>
            <option value="teal-500">Teal</option>
        </select>
    </div> --}}

</div>
