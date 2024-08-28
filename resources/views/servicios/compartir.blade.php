<x-app-layout>
    <div class="p-6 items-center justify-center flex">
        <a href="/">
            <x-application-logo width="15rem" height="5rem" class="fill-current text-gray-500" />
        </a>
    </div>
    <div class="my-auto items-center justify-center flex">
        <div class="max-w-7xl sm:px-6 lg:px-8" style="height: 100vh; width: 100vh">
            <div class=" overflow-hidden shadow-sm rounded-lg bg-white">
                <header class="mt-6">
                    <h2 class="text-lg font-medium my-auto items-center flex justify-center" style="color: rgb(0 178 255);">
                        {{ 'SERVICIOS' }}
                    </h2>
                </header>
                <div class="">
                    <div class="h-12"></div>
                    <div class=" w-full">
                        <div class=" flex justify-center">
                            <div class="flex justify-around">
                                <div class=" flex justify-center overflow-hidden ">
                                    <img src="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <!-- Redes -->
                    <div class="flex-col justify-center text-sm mt-6 mb-6 gap-6">
                        @if ($servicios->count() > 0)
                        @foreach($servicios as $servicio)
                        <div class="flex justify-center p-6">
                            <strong class="flex justify-center items-center px-6"> {{ $servicio->servicio }}</strong>
                        </div>
                        @endforeach
                        @else
                        <div class="flex justify-center p-6">
                            <strong class="flex justify-center items-center px-6"> No hay servicios</strong>
                        </div>
                        @endif
                    </div>
                </div>
                @include('layouts.navigation-user')
            </div>
        </div>
    </div>
</x-app-layout>