<x-app-layout>
    <div class="p-6 items-center justify-center flex">
        <a href="/">
            <x-application-logo width="15rem" height="5rem" class="fill-current text-gray-500" />
        </a>
    </div>
    <div class="my-auto items-center justify-center flex">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="height: 100vh">
            <div class=" overflow-hidden shadow-sm rounded-lg bg-white">
                <div class="max-w-xl">

                    <header class="mt-6">
                        <h2 class="text-lg font-medium my-auto items-center flex justify-center" style="color: rgb(0 178 255);">
                            {{ 'ACERCA DE MI' }}
                        </h2>

                        <h2 class="text-lg font-medium text-black my-auto items-center flex justify-center">
                            {{ $user->nosotros->nombre_de_la_empresa ?? 'No hay nombre disponible' }}
                        </h2>

                    </header>

                    <div class="text-black my-auto items-center flex justify-center p-6">
                        {{ $user->nosotros->texto ?? 'No hay texto disponible' }}
                    </div>

                </div>
                @include('layouts.navigation-user')
            </div>
        </div>
    </div>
</x-app-layout>