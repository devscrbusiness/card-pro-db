<x-app-layout>
    <div class="my-auto items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="height: 100vh">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white">
                    <div class="h-20"></div>
                    <div class="h-12"></div>
                    <div class=" w-full h-20 ">
                        <div class=" flex justify-center">
                            <div class="flex justify-around">
                                <div class=" flex justify-center border-8 rounded-full w-20 h-20 overflow-hidden ">
                                    <img src="{{ asset('storage/' . $user->profile_picture) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 text-gray-900 mt-4 flex-col">
                    {{$nosotrosTexts}}
                </div>
            </div>
        </div>

</x-app-layout>