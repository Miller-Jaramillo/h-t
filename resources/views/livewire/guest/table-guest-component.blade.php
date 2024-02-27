<div wire:poll.5000ms>
    <x-label
        class="flex justify-center mt-5 dark:text-blue-500 font-semibold uppercase tracking-widest text-xs text-green-500 dark:text-green-500">
        Huespedes
    </x-label>



    <!-- Tabla propuestas -->
    <div class="py-5 ">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8    px-4 sm:px-6  ">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg rounded-md">

                @if ($guests->count())
                    <table class="w-full md:w-auto min-w-full ">
                        <thead class="border-b dark:border-indigo-800 border-indigo-500">
                            <tr>
                                <th
                                    class=" px-6 py-3  bg-indigo-50 dark:bg-gray-800 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Nombre Huesped</th>
                                <th
                                    class="hidden sm:table-cell px-6 py-3 bg-indigo-50 dark:bg-gray-800 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Identificacion</th>
                                <th
                                    class="px-6 py-3 bg-indigo-50 dark:bg-gray-800 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Email</th>

                                <th
                                    class="hidden sm:table-cell px-6 py-3 bg-indigo-50 dark:bg-gray-800 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Celular</th>

                                <th
                                    class="hidden sm:table-cell px-6 py-3 bg-indigo-50 dark:bg-gray-800 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Asignar reserva</th>



                                <th
                                    class="px-6 py-3 bg-indigo-50 dark:bg-gray-800 text-gray-500 text-center text-xs font-medium  uppercase tracking-wider">
                                    Acciones
                                </th>
                            </tr>
                        </thead>


                        <tbody class="dark:bg-gray-900 divide-y dark:divide-indigo-950 divide-indigo-50">
                            @foreach ($guests as $guest)
                                <tr>


                                    <td class="hidden sm:table-cell px-6 py-4 text-center">
                                        <p class="text-sm leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $guest->name }}</p>
                                    </td>

                                    <td class="px-6 py-4 text-center ">
                                        <p class="text-sm leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $guest->identification }}</p>
                                    </td>
                                    <td class="px-6 py-4 text-center ">
                                        <p class="text-sm leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $guest->email }}</p>
                                    </td>

                                    <td class="px-6 py-4 text-center ">
                                        <p class="text-sm leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $guest->phone }}</p>
                                    </td>

                                    <td class="flex justify-center items-center p-2">
                                        <div class="flex justify-center items-center">
                                            <x-button wire:click="openFormNuevaHabitacion"
                                                class="inline-flex items-center  py-2 hover:bg-green-500 dark:hover:bg-green-500 bg-white dark:bg-slate-900  shadow-sm icon-emerald "
                                                title="Nueva propuesta">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-6 h-6">
                                                    <path
                                                        d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                                    <path fill-rule="evenodd"
                                                        d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                                                        clip-rule="evenodd" />
                                                </svg>


                                                <x-label class="text-sm"> Reservar</x-label>
                                                {{-- <p class="sm:hidden block "> Nueva <br> propuesta</p> --}}
                                            </x-button>

                                        </div>

                                    </td>


                                    {{-- --> ICONOS - ACCIONES --}}

                                    <td class="px-6 py-4 text-center dark:bg-gray-900 bg-white ">

                                        <div class="flex justify-center">



                                            {{-- -->Ver User --}}
                                            <a href="#" class="icon-blue green-hover"
                                                wire:click="showPropuesta({{ $guest->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-10 h-6">
                                                    <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>











                                            {{-- -->editar User --}}
                                            <a href="#" class="icon-blue green-hover"
                                                wire:click="showPropuesta({{ $guest->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-6 h-6">
                                                    <path
                                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                                    <path
                                                        d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                                </svg>

                                            </a>



                                            <a href="#" wire:click="confirmEliminarPropuesta({{ $guest->id }})"
                                                class="red-hover icon-red">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-10 h-6">
                                                    <path fill-rule="evenodd"
                                                        d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>

                                        </div>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div
                        class="justify-between border-t dark:border-indigo-800 border-indigo-500  dark:bg-gray-900 bg-white px-4 py-3 sm:px-6 text-gray-500 ">
                        {{ $guests->links() }}
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
