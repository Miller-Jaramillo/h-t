<div class="">
    <div>
        <div class="mt-5 max-w-6xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 pb-5">
            <div class=" max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">
                <div
                    class="pb-3 bg-white dark:bg-gray-900 overflow-hidden shadow-xl  sm:rounded-xl rounded-xl
                            border border-b-indigo-400 border-l-indigo-400 border border-t-emerald-400 border-r-emerald-400 pb-2
                            dark:border-b-indigo-900 dark:border-l-indigo-900 dark:border-t-emerald-900 dark:border-r-emerald-900">

                    <div class=" max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">


                        {{-- titulo formulario --}}
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row mt-5 ">

                            <div class="border-b border-gray-100  ">
                                <h2
                                    class="text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                    Tarjeta de presentacion</h2>
                                <p
                                    class="mt-2 text-justify block text-sm font-medium leading-6 text-emerald-400 dark:text-emerald-700 tracking-widest">
                                    Dinos quien eres.. se publicaran en la pagina principal
                                </p>

                            </div>
                        </div>

                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row">

                            <form wire:submit.prevent="submitForm"> {{-- <form method="POST" action="{{ route('registrar-propuesta.submitForm') }}"> --}}

                                {{-- inicio del grid --}}
                                <div class="mt-2 grid grid-cols-1 sm:grid-cols-3   gap-x-10 ">
                                    <div>
                                        <x-label for="name"
                                            class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                            Titulo de tu presentación</x-label>
                                        <div class="mt-1">
                                            <x-input type="text" wire:model="name" name="name" id="name"
                                                autocomplete="given-name"
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
                    <div class="bg-white dark:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg text-center">
                        {!! $message !!}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
