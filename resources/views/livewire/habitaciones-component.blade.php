@include('components.header')



<div class="">
    <div class="mx-auto max-w-5xl border-b border-gray-300 dark:border-gray-700 my-3"></div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6">
        <div class=" overflow-hidden  ">

            <div class="flex justify-center mt-1 pb-3">

                <div>
                    <x-button wire:click="openFormNuevaHabitacion"
                        class="inline-flex items-center px-4 py-2
                        hover:bg-green-100 dark:hover:bg-green-950
                             shadow-sm  mr-1 icon-emerald "
                        title="Nueva propuesta">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6   sm:w-6 sm:h-6">
                            <path fill-rule="evenodd"
                                d="M5.625 1.5H9a3.75 3.75 0 013.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 013.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 01-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875zM12.75 12a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V18a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V12z"
                                clip-rule="evenodd" />
                            <path
                                d="M14.25 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0016.5 7.5h-1.875a.375.375 0 01-.375-.375V5.25z" />
                        </svg>

                        <x-label class="text-sm"> Agregar Habitacion</x-label>
                        {{-- <p class="sm:hidden block "> Nueva <br> propuesta</p> --}}
                    </x-button>

                </div>


                <div>
                    <x-button wire:click="openTablaHabitaciones"
                        class="inline-flex items-center px-4 py-2
                        hover:bg-green-100 dark:hover:bg-green-950
                        shadow-sm  ml-1 icon-sky"
                        title="Propuestas enviadas">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            <path fill-rule="evenodd"
                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                clip-rule="evenodd" />
                        </svg>

                        {{-- <p class="sm:hidden block ">Propuestas <br>enviadas</p> --}}
                        <x-label class="text-sm" for=""> Revisar Habitaciones</x-label>

                    </x-button>

                </div>

            </div>
        </div>
    </div>



    @if ($showFormNuevaHabitacion)
        <livewire:form-room-component> </livewire:form-room-component>
    @endif


    @if ($showTablaHabitaciones)
        <livewire:table-room-component> </livewire:table-room-component>
    @endif



    @include('footer-admin')

    <style>
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
            fill: hsl(129, 100%, 50%);
        }


        .icon-teal path {
            fill: rgb(20, 184, 166);
        }

        .icon-emerald path {
            fill: rgb(16, 185, 129);
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

        .icon-sky path {
            fill: rgb(14, 165, 233);
        }
    </style>


</div>
