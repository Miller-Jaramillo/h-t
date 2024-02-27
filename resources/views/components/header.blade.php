<x-slot name="header"
class="flex justify-center">
{{-- --> logo --}}
<div class="mx-auto max-w-7xl">
    <div class="flex justify-center items-center text-xl">
        {{-- !! logo Ligth --}}
        <div class="flex justify-center">

            <img class="h-20 w-20 rounded-full object-cover " src="{{ Auth::user()->profile_photo_url }}"
                alt="{{ Auth::user()->name }}">
        </div>
        <label class="ml-3  text-2xl font-bold uppercase tracking-wide text-gray-900 dark:text-gray-100">
            {{ Auth::user()->name }}
        </label>
    </div>
</div>
</x-slot>