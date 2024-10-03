<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Ubicación de la empresa') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Colocar la ubicación de la empresa seleccionándola en el mapa.") }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('update.location') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('POST')

                            <div id="map" style="height: 400px; width: 100%;" class="mb-4"></div>

                            <input type="hidden" id="latitude" name="latitude" value="{{ $location->latitude ?? '-0.2224093' }}">
                            <input type="hidden" id="longitude" name="longitude" value="{{ $location->longitude ?? '-78.5335029' }}">

                            <div>
                                <x-input-label for="detalle" :value="__('Descripción')" />
                                <x-text-input id="detalle" name="detalle" type="text" class="mt-1 block w-full" value="{{ $location->detalle ?? '' }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('detalle')" />
                            </div>

                            <x-primary-button>{{ __('Guardar ubicación') }}</x-primary-button>
                        </form>
                    </section>
                </div>
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
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&callback=initMap" async defer></script>
</x-app-layout>