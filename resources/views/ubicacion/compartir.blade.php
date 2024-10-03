<x-app-layout>
    @if(!Auth::check())
        @include('layouts.navigation-guest')
    @endif
    <div class="my-auto items-center justify-center flex">
        <div class="max-w-7xl sm:px-6 lg:px-8" style="width: 100vh">
            <div class="overflow-hidden shadow-sm rounded-lg bg-white">
                <header class="mt-6">
                    <h2 class="text-lg my-auto items-center flex justify-center barlow-extrabold" style="color: rgb(0, 117, 190);">
                        {{ 'UBICACION' }}
                    </h2>
                </header>
                <div class="flex justify-center">
                    <!-- Mapa -->
                    <div id="map" style="width: 100%; height: 30rem"></div>
                    <input type="hidden" id="latitude" name="latitude" value="{{ $location->latitude ?? '' }}">
                    <input type="hidden" id="longitude" name="longitude" value="{{ $location->longitude ?? '' }}">
                </div>
                <div class="flex-col justify-center mt-4 mx-auto">
                    <div class="flex justify-center">
                        <h2 class="text-lg my-auto items-center flex justify-center barlow-extrabold" style="color: rgb(0, 117, 190);">
                            {{ 'OFICINA' }}
                        </h2>
                    </div>
                    <strong class="flex justify-center barlow-medium" style="color: black">{{ $location->detalle ?? '' }}</strong>
                    <div class="flex justify-center">
                        <a href="#" id="open-map" class="flex justify-center items-center px-4 " style="background-color: rgb(0, 255, 255); color: rgb(0, 113, 188); border-radius: 1rem; padding-top: 0.25rem; padding-bottom: 0.25rem">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.6 16.39" width="20px" height="15px">
                                <defs>
                                    <style>
                                        .flecha-1 {
                                            fill: rgb(0, 113, 188);
                                        }
                                    </style>
                                </defs>
                                <g id="Capa_2" data-name="Capa 2">
                                    <g id="Layer_1" data-name="Layer 1">
                                        <path class="flecha-1" d="M11.18.16l9.14,7.48a.7.7,0,0,1,.28.56.73.73,0,0,1-.28.56l-9.14,7.47c-.18.15-.34.2-.48.14s-.2-.21-.2-.46V10.82a18.43,18.43,0,0,0-3.19.35,16.28,16.28,0,0,0-3,.91A8.88,8.88,0,0,0,1.76,13.7,7.41,7.41,0,0,0,0,16.07a18.36,18.36,0,0,1,.47-3.39A11.4,11.4,0,0,1,1.65,9.76a8.86,8.86,0,0,1,2-2.36A9.36,9.36,0,0,1,6.55,5.8a14.53,14.53,0,0,1,4-.74V.48c0-.25.07-.4.2-.46A.49.49,0,0,1,11.18.16Z" />
                                    </g>
                                </g>
                            </svg>
                            <strong class="barlow-extrabold">IR AHORA</strong>
                        </a>
                    </div>
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

                document.getElementById('latitude').value = location.lat();
                document.getElementById('longitude').value = location.lng();
                updateMapLink();
            }

            function updateMapLink() {
                var lat = document.getElementById('latitude').value;
                var lng = document.getElementById('longitude').value;
                var mapLink = `https://www.google.com/maps?q=${lat},${lng}`;
                document.getElementById('open-map').setAttribute('href', mapLink);
            }

            updateMapLink(); // Initialize the link on page load
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&callback=initMap" async defer></script>
</x-app-layout>