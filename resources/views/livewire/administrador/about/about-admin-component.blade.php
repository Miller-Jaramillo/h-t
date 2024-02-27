@include('components.header')



<div class="">
    <div class="mx-auto max-w-6xl border-b border-yellow-500 dark:border-gray-300 my-3"></div>


    @livewire('administrador.about.about-show-component')





    {{-- @if ($showFormNuevoAbout)
    @livewire('administrador.about.about-update-component')
    @endif

    @if ($showAbout)
    @livewire('administrador.about.about-show-component')
    @endif
 --}}



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


