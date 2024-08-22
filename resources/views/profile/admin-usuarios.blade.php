<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buscador de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Formulario de búsqueda -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <form method="GET" action="{{ route('admin.users.search') }}">
                    @csrf
                    <div class="flex items-center space-x-4">
                        <input type="email" name="email" class="form-input" placeholder="Buscar por email" required>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>

                @if(isset($user))
                <div class="mt-6">
                    <p><strong>{{ __('Nombre:') }}</strong> {{ $user->name }}</p>
                    <p><strong>{{ __('Email:') }}</strong> {{ $user->email }}</p>
                    <p><strong>{{ __('Telefono:') }}</strong> {{ $user->telefono }}</p>
                    <p><strong>{{ __('Ocupacion:') }}</strong> {{ $user->ocupacion }}</p>
                    <div class="mt-4">
                        <form method="GET" action="{{ route('admin.users.edit', $user) }}">
                            @csrf
                            <button type="submit" class="btn btn-secondary">Editar</button>
                        </form>
                    </div>
                </div>
                @else
                <div class="mt-6">
                    <p>{{ __('No se encontraron resultados.') }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>