 <div>
     @include('components.header')


     <div class="">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             {{-- --> separador --}}
             <div class="mx-auto max-w-6xl border-b border-yellow-500 dark:border-gray-300 my-3"></div>



             <div class="mt-5 flex justify-center">

                 @foreach ($users as $user)
                     @if ($user->slogan != null)
                         <label
                             class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-2xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                             {{ $user->slogan }}
                         </label>
                     @else
                         <label
                             class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-2xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                             Bienvenido Craftyniano administrador 👽
                         </label>
                     @endif
                 @endforeach
             </div>
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

             <div class="mt-5 flex justify-center">

                 @foreach ($users as $user)
                     @if ($user->slogan != null)
                         <label
                             class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-2xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                             {{ $user->final_slogan }}
                         </label>
                     @else
                         <label
                             class="flex justify-center mx-auto max-w-6xl pb-3  py-2 px-2 text-xl uppercase font-bold dark:font-bold text-gray-900 dark:text-gray-200">
                             Hasta pronto Craftyniano 👋
                         </label>
                     @endif
                 @endforeach
             </div>

             @include('footer-admin')
         </div>
     </div>

 </div>
