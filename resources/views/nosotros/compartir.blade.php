<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nosotros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section class="">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 my-auto items-center flex justify-center">
                                {{ $user->nosotros->nombre_de_la_empresa ?? 'No hay nombre disponible' }}
                            </h2>

                        </header>

                        <div class="bg-white my-auto items-center flex justify-center mt-6">
                            {{ $user->nosotros->texto ?? 'No hay texto disponible' }}
                        </div>
                    </section>
                </div>
                @include('layouts.navigation-user')
            </div>
        </div>
    </div>
</x-app-layout>