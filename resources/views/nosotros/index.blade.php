<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Informacion de la empresa') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Crear o editar la informacion de Nosotros ") }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('nosotros.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('POST')

                            <div>
                                <x-input-label for="nombre_empresa" :value="__('Nombre de la empresa')" />
                                <x-text-input
                                    id="nombre_empresa"
                                    name="nombre_empresa"
                                    type="text"
                                    class="mt-1 block w-full"
                                    value="{{ $nosotrosTexts->nombre_de_la_empresa ?? '' }}"
                                    autofocus
                                    autocomplete="nombre_empresa" />
                                <x-input-error class="mt-2" :messages="$errors->get('nombre_empresa')" />
                            </div>

                            <div>
                                <x-input-label for="nosotros" :value="__('Nosotros')" />
                                <x-textarea
                                    id="nosotros"
                                    name="nosotros"
                                    class="mt-1 block w-full"
                                    rows="10"
                                    autofocus
                                    autocomplete="nosotros">{{ $nosotrosTexts->texto ?? '' }}</x-textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('nosotros')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Guardar') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>