 <div>
     @include('components.header')


     <div class="">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             {{-- --> separador --}}
             <div class="mx-auto max-w-6xl border-b border-yellow-500 dark:border-gray-300 my-3"></div>



             <label
                 class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-2xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">BIENVENIDO
                 A LA FAMILIA TERRANOVA
             </label>
             <div>


                 @livewire('administrador.about.about-show-component')

             </div>
             <div>
                 <x-label
                     class="  mx-auto max-w-6xl  mt-10 py-2 px-2 text-md uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                     Nuestros servicios</x-label>

                 @livewire('public.services-us-component')
             </div>

             <div>
                 <x-label
                     class="  mx-auto max-w-6xl  mt-10 py-2 px-2 text-md uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                     Habitaciones</x-label>

                 @livewire('inf-reservas-component')
             </div>

             @include('footer-admin')
         </div>
     </div>

 </div>
