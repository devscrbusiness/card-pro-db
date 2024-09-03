<x-app-layout>
    <div class="p-6 items-center justify-center flex">
        <a href="/">
            <x-application-logo width="15rem" height="5rem" class="fill-current text-gray-500" />
        </a>
    </div>
    <div class="my-auto items-center justify-center flex">
        <div class="max-w-7xl sm:px-6 lg:px-8" style="height: 100vh; width: 100vh">
            <div class=" overflow-hidden shadow-sm rounded-lg bg-white">
                <header class="mt-6">
                    <h2 class="text-lg font-medium my-auto items-center flex justify-center" style="color: rgb(0 178 255);">
                        {{ 'UBICACION' }}
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
                    <!-- Mapa -->
                    <div id="map" style="width: 100%; height: 30rem"></div>
                    <input type="hidden" id="latitude" name="latitude" value="{{ $location->latitude ?? '' }}">
                    <input type="hidden" id="longitude" name="longitude" value="{{ $location->longitude ?? '' }}">
                </div>
                @include('layouts.navigation-user')
            </div>
        </div>
    </div>

    <script>
        function initMap() {
            var latitudeValue = parseFloat(document.getElementById('latitude').value) || -34.397;
            var longitudeValue = parseFloat(document.getElementById('longitude').value) || 150.644;

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: {
                    lat: latitudeValue,
                    lng: longitudeValue
                }
            });

            var marker = new google.maps.Marker({
                position: {
                    lat: latitudeValue,
                    lng: longitudeValue
                },
                map: map
            });

            map.addListener('click', function(event) {
                placeMarker(event.latLng);
            });

            function placeMarker(location) {
                if (marker) {
                    marker.setPosition(location);
                } else {
                    marker = new google.maps.Marker({
                        position: location,
                        map: map
                    });
                }

                // Establece los valores en los inputs ocultos
                document.getElementById('latitude').value = location.lat();
                document.getElementById('longitude').value = location.lng();
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&callback=initMap" async defer></script>
</x-app-layout>