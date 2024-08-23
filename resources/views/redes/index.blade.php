<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Redes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Redes del usuario') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Crear o editar la informacion de sus redes.") }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('redes.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('POST')

                            <div>
                                <x-input-label for="instagram" :value="__('Instagram')" />
                                <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full" value="{{ $redes[1] ?? '' }}" autofocus autocomplete="instagram" />
                                <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
                            </div>

                            <div>
                                <x-input-label for="facebook" :value="__('Facebook')" />
                                <x-text-input id="facebook" name="facebook" type="text" class="mt-1 block w-full" value="{{ $redes[2] ?? '' }}" autofocus autocomplete="facebook" />
                                <x-input-error class="mt-2" :messages="$errors->get('facebook')" />
                            </div>

                            <div>
                                <x-input-label for="youtube" :value="__('Youtube')" />
                                <x-text-input id="youtube" name="youtube" type="text" class="mt-1 block w-full" value="{{ $redes[3] ?? '' }}" autofocus autocomplete="youtube" />
                                <x-input-error class="mt-2" :messages="$errors->get('youtube')" />
                            </div>

                            <div>
                                <x-input-label for="twitter" :value="__('Twitter')" />
                                <x-text-input id="twitter" name="twitter" type="text" class="mt-1 block w-full" value="{{ $redes[4] ?? '' }}" autofocus autocomplete="twitter" />
                                <x-input-error class="mt-2" :messages="$errors->get('twitter')" />
                            </div>

                            <div>
                                <x-input-label for="tiktok" :value="__('Tiktok')" />
                                <x-text-input id="tiktok" name="tiktok" type="text" class="mt-1 block w-full" value="{{ $redes[5] ?? '' }}" autofocus autocomplete="tiktok" />
                                <x-input-error class="mt-2" :messages="$errors->get('tiktok')" />
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