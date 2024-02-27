<div class="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Administrar habitaciones') }}
        </h2>
    </x-slot>



    <x-label
    class="flex justify-center mt-5 dark:text-blue-500 font-semibold uppercase tracking-widest text-xs text-green-500 dark:text-green-500">
    Agregar Habitacione
</x-label>



    <div class="py-5 ">






        <div class="mt-5 max-w-6xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 pb-5">

            <div class=" max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">
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
                                    Agregar habitacion</h2>
                                <p
                                    class="mt-2 text-justify block text-sm font-medium leading-6 text-emerald-400 dark:text-emerald-700 tracking-widest">
                                    Las habitaciones que agregues se publicaran en la pagina principal
                                </p>

                            </div>
                        </div>

                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row">

                            {{-- <form method="POST" action="{{ route('registrar-propuesta.submitForm') }}"> --}}

                            {{-- inicio del grid --}}
                            <div class="mt-5 grid grid-cols-1 sm:grid-cols-1   gap-x-10 ">
                                <div>
                                    <x-label for="name_room"
                                        class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                        Nombre de la habitacion</x-label>
                                    <div class="mt-1">
                                        <x-input type="text" wire:model="name_room" name="name_room" id="name_room"
                                            autocomplete="given-name"
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

                            </div>


                            <div class="mt-3 grid grid-cols-1 sm:grid-cols-3   gap-x-10 ">

                                <div class="sm:mt-3 mt-3">
                                    <x-label for="no_guest"
                                        class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase">
                                        Huespedes permitidos</x-label>
                                    <div class="mt-1">
                                        <x-input type="number" wire:model="no_guest" name="no_guest" id="no_guest"
                                            autocomplete="given-name"
                                            class="block w-full rounded-md border-0 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                    text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase" />
                                    </div>
                                </div>


                                <div class="sm:mt-3 mt-3">
                                    <x-label for="no_room"
                                        class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase">
                                        Numero de habitaciones</x-label>
                                    <div class="mt-1">
                                        <x-input type="number" wire:model="no_room" name="no_room" id="no_room"
                                            autocomplete="given-name"
                                            class="block w-full rounded-md border-0 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                    text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase" />
                                    </div>
                                </div>

                                <div class="sm:mt-3 mt-3">
                                    <x-label for="nigth_guest"
                                        class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase">
                                        valor por huesped</x-label>
                                    <div class="mt-1">
                                        <x-input type="number" wire:model="nigth_guest" name="nigth_guest"
                                            id="nigth_guest" autocomplete="given-name"
                                            class="block w-full rounded-md border-0 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                    text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase" />
                                    </div>
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
                                                    <div class="text-center">
                                                        @if ($preview['type'] === 'image')
                                                            <img src="{{ $preview['url'] }}" alt="Preview"
                                                                class="h-128 w-128 sm:rounded-lg rounded-md border-2 border-indigo-100">
                                                        @elseif ($preview['type'] === 'video')
                                                            <video controls src="{{ $preview['url'] }}"
                                                                class="h-128 w-128 sm:rounded-lg rounded-md border-2 border-indigo-100"></video>
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





                            </div>




                            <div class="mt-4 flex justify-end">
                                <button wire:click="closeForm" type="button"
                                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                                    Cancelar
                                </button>
                                <x-button wire:click="submitForm" class="ml-4 bg-green-600 dark:bg-green-600">
                                    {{ __('Enviar') }}
                                </x-button>
                            </div>

                            {{-- </form> --}}

                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div>
            @if ($message)
                <div x-data="{ show: @entangle('message') }" x-show="show" x-init="setTimeout(() => { show = false; }, 3000)"
                    class="fixed inset-0 flex items-center justify-center">
                    <div class="bg-white dark:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg text-center">
                        {!! $message !!}
                    </div>
                </div>
            @endif
        </div>





    </div>



</div>
