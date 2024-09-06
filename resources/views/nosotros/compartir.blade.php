<x-app-layout>
    @if(!Auth::check())
    <a class="p-6 items-center justify-center flex" href="/">
        <x-application-logo width="15rem" height="5rem" class="fill-current text-gray-500" />
    </a>
    @endif
    <div class="my-auto items-center justify-center flex">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="height: 100vh">
            <div class=" overflow-hidden shadow-sm rounded-lg bg-white">
                <div class="max-w-xl">

                    <header class="mt-6">
                        <h2 class="text-lg font-medium my-auto items-center flex justify-center" style="color: rgb(0, 117, 190);">
                            {{ 'ACERCA DE MI' }}
                        </h2>

                        <div class="mt-2 flex justify-center">
                            <img src="{{ asset('storage/' . $user->nosotros->photo_de_la_empresa) }}" alt="Foto de Perfil de {{ $user->name }}" class="object-cover">
                        </div>

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