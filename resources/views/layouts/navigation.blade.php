<nav x-data="{ open: false }" class=" border-b border-gray-100" style="background-color: rgb(0, 134, 201);">
    <!-- Menú de Navegación Principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-white" />
                    </a>
                </div>

                <!-- Enlaces de Navegación -->
                @if (!isset($user) || Auth::user()->nickname == $user->nickname)
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('nosotros.index')" :active="request()->routeIs('nosotros.index')">
                        {{ __('Nosotros') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('servicios.index')" :active="request()->routeIs('servicios.index')">
                        {{ __('Servicios') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('ubicacion.index')" :active="request()->routeIs('ubicacion.index')">
                        {{ __('Ubicación') }}
                    </x-nav-link>
                </div>    
                @else
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('nosotros.compartir', ['nickname' => $user->nickname])" :active="request()->routeIs('nosotros.compartir', ['nickname' => $user->nickname])">
                        {{ __('Nosotros') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('servicios.compartir', ['nickname' => $user->nickname])" :active="request()->routeIs('servicios.compartir', ['nickname' => $user->nickname])">
                        {{ __('Servicios') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('ubicacion.compartir', ['nickname' => $user->nickname])" :active="request()->routeIs('ubicacion.compartir', ['nickname' => $user->nickname])">
                        {{ __('Ubicación') }}
                    </x-nav-link>
                </div>
                @endif
                
            </div>

            <!-- Desplegable de Configuraciones -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150">
                            <div class="text-white">{{ Auth::user()->name }}</div>

                            <div class="ms-1 text-white">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-dropdown-link>

                        <!-- Autenticación -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>

                        @if (Auth::user()->rol == 1)
                        <x-dropdown-link :href="route('auth.register')">
                            {{ __('Registrar') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('admin.users.index')">
                            {{ __('Admin Usuarios') }}
                        </x-dropdown-link>
                        @endif

                        <x-dropdown-link :href="route('redes.index')">
                            {{ __('Redes') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('nosotros.index')">
                            {{ __('Nosotros') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('servicios.index')">
                            {{ __('Servicios') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('ubicacion.index')">
                            {{ __('Ubicación') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Botón Hamburguesa -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 focus:outline-non focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-20 w-20" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú de Navegación Responsivo -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Inicio') }}
            </x-responsive-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-responsive-nav-link :href="route('nosotros.index')" :active="request()->routeIs('nosotros.index')">
                {{ __('Nosotros') }}
            </x-responsive-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-responsive-nav-link :href="route('servicios.index')" :active="request()->routeIs('servicios.index')">
                {{ __('Servicios') }}
            </x-responsive-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-responsive-nav-link :href="route('ubicacion.index')" :active="request()->routeIs('ubicacion.index')">
                {{ __('Ubicación') }}
            </x-responsive-nav-link>
        </div>

        <!-- Opciones Responsivas de Configuración -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-200">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Perfil') }}
                </x-responsive-nav-link>

                <!-- Autenticación -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </x-responsive-nav-link>
                </form>

                @if (Auth::user()->rol == 1)
                <x-responsive-nav-link :href="route('auth.register')">
                    {{ __('Registrar') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('admin.users.index')">
                    {{ __('Admin Usuarios') }}
                </x-responsive-nav-link>
                @endif

                <x-responsive-nav-link :href="route('redes.index')">
                    {{ __('Redes') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('nosotros.index')">
                    {{ __('Nosotros') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('servicios.index')">
                    {{ __('Servicios') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('ubicacion.index')">
                    {{ __('Ubicación') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </div>
</nav>