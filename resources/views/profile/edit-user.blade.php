<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <form method="POST" action="{{ route('admin.users.update', $user) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-input" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-input" required>
                    </div>

                    <div>
                        <x-input-label for="telefono" :value="__('Telefono')" />
                        <x-text-input id="telefono" name="telefono" type="telefono" class="mt-1 block w-full" :value="old('telefono', $user->telefono)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
                    </div>

                    <div>
                        <x-input-label for="ocupacion" :value="__('Ocupacion')" />
                        <x-text-input id="ocupacion" name="ocupacion" type="ocupacion" class="mt-1 block w-full" :value="old('ocupacion', $user->ocupacion)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('ocupacion')" />
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>