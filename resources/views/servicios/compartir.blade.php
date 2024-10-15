<x-app-layout>
    @if(!Auth::check())
        @include('layouts.navigation-guest')
    @endif
    <div class="my-auto items-center justify-center flex">
        <div class="max-w-7xl sm:px-6 lg:px-8" style="height: 100vh; width: 100vh">
            <div class=" overflow-hidden shadow-sm rounded-lg bg-white">
                <header class="mt-6">
                    <h2 class="text-lg my-auto items-center flex justify-center barlow-extrabold" style="color: rgb(0, 117, 190);">
                        {{ 'SERVICIOS' }}
                    </h2>
                </header>
                <div class="">
                    <div class="h-12"></div>
                    <div class=" w-full">
                        <div class=" flex justify-center">
                            <div class="flex justify-around">
                                <div class="flex justify-center overflow-hidden" style="width: 100%; height: 10rem">
                                    @if($profilePicture)
                                    <img src="{{ asset('storage/' . $profilePicture) }}" alt="Profile Picture" />
                                    @else
                                    <p>No profile picture available</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <!-- Redes -->
                    <div class="flex-col justify-center text-sm mt-6 mb-6 gap-6">
                        @if ($servicios->count() > 0)
                        @foreach($servicios as $servicio)
                        <div class="flex justify-center p-6">
                            <strong class="flex justify-center items-center px-6 barlow-medium"> {{ $servicio->servicio }}</strong>
                        </div>
                        @endforeach
                        @else
                        <div class="flex justify-center p-6">
                            <strong class="flex justify-center items-center px-6 barlow-medium"> No hay servicios</strong>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky mt-5 bottom-5 inset-x-0 my-3 mb-6 sm:mb-5 mx-auto w-screen sm:w-fit">
        @include('layouts.navigation-user')
    </div>
</x-app-layout>