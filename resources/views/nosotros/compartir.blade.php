<x-app-layout>
    @if(!Auth::check())
        @include('layouts.navigation-guest')
    @endif
    <div class="my-auto items-center justify-center flex">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-h-screen">
            <div class="flex-1 shadow-sm rounded-lg bg-white">
                <div class="max-w-xl">

                    <header class="mt-6">
                        <h2 class="text-lg my-auto items-center flex justify-center barlow-extrabold" style="color: rgb(0, 117, 190);">
                            {{ 'ACERCA DE MI' }}
                        </h2>

                        <div class="mt-2 flex justify-center">
                            <img src="{{ asset('storage/' . $user->nosotros->photo_de_la_empresa) }}" alt="Foto de Perfil de {{ $user->name }}" class="object-cover">
                        </div>

                    </header>

                    <div class="text-black my-auto items-center flex justify-center p-6 barlow-regular">
                        {{ $user->nosotros->texto ?? 'No hay texto disponible' }}
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    <div class="sticky mt-5 bottom-5 inset-x-0 my-3 mb-6 sm:mb-5 mx-auto w-screen sm:w-fit">
        @include('layouts.navigation-user')
    </div>
</x-app-layout>