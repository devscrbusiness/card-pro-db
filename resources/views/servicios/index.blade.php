<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Mostrar los servicios existentes -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Lista de Servicios') }}
                        </h2>
                    </header>

                    <div class="mt-6">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Servicio</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imagen</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($servicios as $servicio)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $servicio->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $servicio->servicio }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 " style="max-width: 10rem"><img src="{{ asset('storage/' . $servicio->servicio_picture) }}"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Formulario para crear o editar servicios -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ isset($servicio) ? 'Editar Servicio' : 'Crear Nuevo Servicio' }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ isset($servicio) ? 'Edita la información del servicio' : 'Crea un nuevo servicio' }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('servicios.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div>
                                <x-input-label for="servicio" :value="__('Servicio')" />
                                <x-text-input
                                    id="servicio"
                                    name="servicio"
                                    type="text"
                                    class="mt-1 block w-full"
                                    value=""
                                    autofocus
                                    autocomplete="servicio" />
                                <x-input-error class="mt-2" :messages="$errors->get('servicio')" />
                            </div>

                            <div>
                                <x-input-label for="servicio_picture" :value="__('Imagen del Servicio')" />
                                <input type="file" name="servicio_picture" id="servicio_picture" class="mt-1 block w-full">
                                <x-input-error class="mt-2" :messages="$errors->get('servicio_picture')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ 'Guardar' }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>