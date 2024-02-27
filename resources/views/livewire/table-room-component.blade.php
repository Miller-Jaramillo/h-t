<div wire:poll.5000ms>
    <x-label
        class="flex justify-center mt-5 dark:text-blue-500 font-semibold uppercase tracking-widest text-xs text-green-500 dark:text-green-500">
        Habitaciones
    </x-label>



    <!-- Tabla propuestas -->
    <div class="py-5 ">
        <div class=" max-w-5xl mx-auto sm:px-6 lg:px-8    px-4 sm:px-6  ">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg rounded-md">

                @if ($rooms->count())
                    <table class="w-full md:w-auto min-w-full ">
                        <thead class="border-b dark:border-indigo-800 border-indigo-500">
                            <tr>
                                <th
                                    class=" px-6 py-3  bg-indigo-50 dark:bg-blue-950 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Nombre Habitacion</th>
                                <th
                                    class="hidden sm:table-cell px-6 py-3 bg-indigo-50 dark:bg-blue-950 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Total Habitaciones</th>
                                <th
                                    class="px-6 py-3 bg-indigo-50 dark:bg-blue-950 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Habitaciones disponibles</th>

                                <th
                                    class="hidden sm:table-cell px-6 py-3 bg-indigo-50 dark:bg-blue-950 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Habitaciones reservadas</th>



                                <th
                                    class="px-6 py-3 bg-indigo-50 dark:bg-blue-950 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Acciones
                                </th>
                            </tr>
                        </thead>


                        <tbody class="dark:bg-gray-900 divide-y dark:divide-indigo-950 divide-indigo-50">
                            @foreach ($rooms as $room)
                                <tr>


                                    <td class="hidden sm:table-cell px-6 py-4 text-center">
                                        <p class="text-sm leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $room->name }}</p>
                                    </td>

                                    <td class="px-6 py-4 text-center ">
                                        <p class="text-sm leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $room->no_room }}</p>
                                    </td>


                                    <td class="hidden sm:table-cell px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            {{-- -->Ver User --}}
                                            <a href="#" class="icon-blue green-hover"
                                                wire:click="showPropuesta({{ $room->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-6 h-6">
                                                    <path
                                                        d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                                    <path fill-rule="evenodd"
                                                        d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                                                        clip-rule="evenodd" />
                                                </svg>


                                            </a>

                                        </div>
                                    </td>

                                    <td class="hidden sm:table-cell px-6 py-4 text-center">
                                        <div class="flex justify-center">
                                            {{-- -->Ver User --}}
                                            <a href="#" class="icon-blue green-hover"
                                                wire:click="showPropuesta({{ $room->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-6 h-6">
                                                    <path
                                                        d="M5.625 3.75a2.625 2.625 0 1 0 0 5.25h12.75a2.625 2.625 0 0 0 0-5.25H5.625ZM3.75 11.25a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75ZM3 15.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75ZM3.75 18.75a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75Z" />
                                                </svg>


                                            </a>

                                        </div>
                                    </td>

                                    {{-- --> ICONOS - ACCIONES --}}

                                    <td class="px-6 py-4 text-center dark:bg-gray-900 bg-white ">

                                        <div class="flex justify-center">












                                            {{-- -->editar User --}}


                                            <x-button class="mr-1 icon-blue green-hover"
                                                wire:click="editRoom({{ $room->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-6 h-6">
                                                    <path
                                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                                    <path
                                                        d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                                </svg>
                                                <x-label>Editar</x-label>
                                            </x-button>




                                            <x-button wire:click="deleteRoom({{ $room->id }})"
                                                class="ml-1 red-hover icon-red">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-10 h-6">
                                                    <path fill-rule="evenodd"
                                                        d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <x-label>Eliminar</x-label>
                                            </x-button>

                                        </div>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div
                        class="justify-between border-t dark:border-indigo-800 border-indigo-500  dark:bg-gray-900 bg-white px-4 py-3 sm:px-6 text-gray-500 ">
                        {{ $rooms->links() }}
                    </div>
                @else
                    <div
                        class="mt-5 text-center justify-between border-t dark:border-indigo-800 border-indigo-500 dark:bg-gray-900 bg-gray-100 dark:text-indigo-600 text-indigo-500 px-4 py-3 sm:px-6 tracking-widest">
                        No hay resultados.
                    </div>
                @endif


                <div>
                    @if ($message)
                        <div x-data="{ show: @entangle('message') }" x-show="show" x-init="setTimeout(() => { show = false; }, 2000)"
                            class="fixed inset-0 flex items-center justify-center">
                            <div class="bg-white dark:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg text-center">
                                {!! $message !!}
                            </div>
                        </div>
                    @endif
                </div>
                @livewireScripts

            </div>
        </div>
    </div>



    <style>
        /* styles.css */
        .modal-content {
            max-height: 80vh;
            /* Altura máxima del 80% del viewport height */
            overflow-y: auto;
            /* Habilita el scroll vertical si el contenido excede la altura máxima */
        }
    </style>


    @if ($showForm)
        <div class="container max-w-2xl mx-auto">
            <div id="floating-form" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-75 ">
                <div
                    class="bg-gray-100 dark:bg-gray-800 p-6 rounded-md dark:text-white text-gray-900 border border-indigo-800 max-w-7xl mx-auto max-h-full overflow-auto">
                    <form wire:submit.prevent="update">

                        <div class="grid grid-cols-5">
                            <div class="col-span-2">
                                <x-label for="name_room">Nombre de la habitación</x-label>
                                <x-input type="text" id="name_room" wire:model="name_room" />
                                @error('name_room')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <x-label for="no_guest">Número de huéspedes</x-label>
                                <x-input type="number" id="no_guest" wire:model="no_guest" />
                                @error('no_guest')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <x-label for="no_room">Número de habitación</x-label>
                                <x-input type="number" id="no_room" wire:model="no_room" />
                                @error('no_room')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <x-label for="nigth_guest">Precio por noche</x-label>
                                <x-input type="number" id="nigth_guest" wire:model="nigth_guest" />
                                @error('nigth_guest')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{-- Aquí van los campos del formulario --}}




                        <div class="">
                            <x-label for="description"
                                class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase">
                                Descripcion</x-label>
                            <p
                                class=" block text-sm font-medium leading-6 text-gray-400 dark:text-gray-700 tracking-widest">
                                Describe la habitación</p>

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
                            @error('description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>





                        {{-- Botón de guardar --}}
                        <button type="submit">Guardar</button>
                    </form>

                    {{-- Mostrar mensajes de éxito o error --}}
                    @if ($message)
                        <div>{{ $message }}</div>
                    @endif

                    <div class="mt-4 ">
                        <x-label for="cover-photo"
                            class="text-xs font-semibold leading-6 dark:text-gray-100 text-gray-900 tracking-widest uppercase">
                            Fotos</x-label>

                        @if ($previews)
                            <div class="grid grid-cols-2">
                                @foreach ($previews as $preview)
                                    <div
                                        class="mt-2 flex justify-center sm:rounded-lg rounded-md dark:bg-gray-900
                                                    border border-dashed border-indigo-900/25 dark:border-indigo-100/25 px-6 py-10">
                                        <div class="text-center">
                                            @if ($preview['type'] === 'image')
                                                <img src="{{ $preview['url'] }}" alt="Preview"
                                                    class="h-44 w-auto sm:rounded-lg rounded-md border-2 border-indigo-100">
                                            @elseif ($preview['type'] === 'video')
                                                <video controls src="{{ $preview['url'] }}"
                                                    class="h-32 w-32 sm:rounded-lg rounded-md border-2 border-indigo-100"></video>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <div class="mt-2">
                            <input type="file" id="file" wire:model="files" accept="image/*,video/*"
                                multiple class="mt-1">
                        </div>
                    </div>



                    {{-- Botón de cancelar --}}
                    <button wire:click="closeForm">Cancelar</button>
                </div>
            </div>
        </div>

        @livewireScripts

    @endif


</div>
