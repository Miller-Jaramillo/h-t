<div
    class="mx-auto max-w-5xl  px-10 sm:px-6 lg:px-2 shadow-xl rounded-xl
bg-gradient-to-r from-blue-100 to- dark:from-gray-500 dark:to-blue-950 mt-5">

    <div class="mx-auto max-w-2xl py-2 sm:py-2 lg:max-w-none ">




        <div class="pb-3 bg-white overflow-hidden shadow-xl  sm:rounded-xl rounded-xl">

            <div class=" max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">

                <form>
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Personaliza</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Termina de ajustar tu presentación</p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="col-span-full">

                                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="sm:col-span-3">
                                            <label for="first-name"
                                                class="block text-sm font-medium leading-6 text-gray-900">Slogan</label>
                                            <div class="mt-2">
                                                <input type="text" name="first-name" id="first-name"
                                                    autocomplete="given-name"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                    placeholder="Crea con Ingenio, conquista con Crafty 👽🚀" />


                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="last-name"
                                                class="block text-sm font-medium leading-6 text-gray-900">Slogan
                                                Final</label>
                                            <div class="mt-2">
                                                <input type="text" name="last-name" id="last-name"
                                                    autocomplete="family-name"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                    placeholder="Hasta Pronto, Te esperamos 😶‍🌫️❤️" />

                                            </div>
                                        </div>
                                    </div>
                                </div>










                                <div class="col-span-full">
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
                                                                        class="h-44 w-44 rounded-full border-2 border-indigo-100">
                                                                @elseif ($preview['type'] === 'video')
                                                                    <video controls
                                                                        src="{{ $preview['url'] }}"
                                                                        class="h-44 w-44 rounded-full border-2 border-indigo-100"></video>
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
                                </div>


                            </div>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Información de contacto</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Esta informacion es importante para tus
                                clientes</p>




                            <div class="col-span-full">
                                <div class="grid grid-cols-3">
                                    <div class="">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900">Correo del
                                            hotel</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                                <x-input type="text" name="email" id="email"
                                                    autocomplete="email"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    placeholder="example@gmail.com" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <label for="phone"
                                            class="block text-sm font-medium leading-6 text-gray-900">Telefono/celular
                                            del hotel</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                                <x-input type="text" name="phone" id="phone"
                                                    autocomplete="phone"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    placeholder="jeje" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <label for="extension"
                                            class="block text-sm font-medium leading-6 text-gray-900">Extension</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                                <input type="text" name="extension" id="extension"
                                                    autocomplete="extension"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    placeholder="(opcional)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


                                <div class="sm:col-span-3 sm:col-start-1">
                                    <label for="city"
                                        class="block text-sm font-medium leading-6 text-gray-900">Departamento</label>
                                    <div class="mt-2">
                                        <input type="text" name="city" id="city"
                                            autocomplete="address-level2"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="region"
                                        class="block text-sm font-medium leading-6 text-gray-900">Ciudad /
                                        Province</label>
                                    <div class="mt-2">
                                        <input type="text" name="region" id="region"
                                            autocomplete="address-level1"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>


                            </div>
                        </div>














                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Redes</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Agrega tus redes sociales 😎</p>





                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">







                                <div class="sm:col-span-3">
                                    <x-label for="whatsapp"
                                        class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                        Whatsapp</x-label>
                                    <div class="mt-1">
                                        <x-input type="text" wire:model="whatsapp" name="whatsapp" id="whatsapp"
                                            autocomplete="given-name"
                                            class=" block w-full rounded-md border-0 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase"
                                            placeholder="3 xxx xxx xxx" />

                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="facebook"
                                        class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">




                                        Facebook


                                    </label>


                                    <div class="mt-1">
                                        <x-input type="text" wire:model="facebook" name="facebook" id="facebook"
                                            autocomplete="given-name"
                                            class=" block w-full rounded-md border-0 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase"
                                            placeholder="https://www.facebook.com/tu-cuenta" />

                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <x-label for="instagram"
                                        class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                        Instagram</x-label>
                                    <div class="mt-1">
                                        <x-input type="text" wire:model="instagram" name="instagram"
                                            id="instagram" autocomplete="given-name"
                                            class=" block w-full rounded-md border-0 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase"
                                            placeholder="https://www.instagram.com/tu-cuenta/" />

                                    </div>
                                </div>


                                <div class="sm:col-span-3">
                                    <label for="tiktok"
                                        class="text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase ">
                                        Tik-Tok</label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="tiktok" name="tiktok" id="tiktok"
                                            autocomplete="given-name"
                                            class=" block w-full rounded-md border-0 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                                text-xs font-semibold leading-6 dark:text-gray-100  text-gray-900 tracking-widest uppercase" />
                                    </div>
                                </div>


                            </div>
                        </div>











                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
