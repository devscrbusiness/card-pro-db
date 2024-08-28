<x-app-layout>
    <div class="my-auto items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="height: 100vh">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg" style="background-color: rgb(0 178 255);">
                <div class="">
                    <div class="h-20"></div>
                    <div class="h-12"></div>
                    <div class=" w-full">
                        <div class=" flex justify-center">
                            <div class="flex justify-around">
                                <div class="flex justify-center rounded-full overflow-hidden" style="border-width: 5px; border-color: rgb(0 150 214); width: 10rem; height: 10rem">
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

                <div class="p-6 text-gray-900 mt-4 flex-col">
                    <div class="flex-col justify-center">
                        <!-- Nombre y apellido -->
                        <div class="flex justify-center text-xl text-white">
                            {{ $user->name }} - {{ $user->last_name }}
                        </div>

                        <!-- Ocupación -->
                        <strong class="flex justify-center text-md text-white">
                            {{ $user->ocupacion }}
                        </strong>
                    </div>
                    <div class="flex justify-center">
                        <!-- Contacto -->
                        <div class="flex justify-center text-sm mt-6 gap-6">
                            <div class="flex flex-col justify-center">
                                <a class="rounded-lg" href="https://wa.me/{{ $user->telefono }}" style="background-color: rgb(37 211 102); padding: 0.5rem; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5); ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-whatsapp " viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                    </svg>
                                </a>
                                <span class="mt-2 text-white flex justify-center">Whatsapp</span>
                            </div>
                            <div class="flex flex-col justify-center">
                                <a href="sms:{{ $user->telefono }}?body=Tu%20mensaje%20aquí" class="rounded-lg " style="background-color: rgb(0 106 255); padding: 0.5rem; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5); ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-12">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                    </svg>
                                </a>
                                <span class="mt-2 text-white flex justify-center">SMS</span>
                            </div>
                            <div class="flex flex-col justify-center">
                                <a href="mailto:{{ $user->email }}" class=" rounded-lg " style="background-color: rgb(0 106 255); padding: 0.5rem; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5); ">
                                    <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-12">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                </a>
                                <span class="mt-2 text-white flex justify-center">Mail</span>
                            </div>
                            <div class="flex flex-col justify-center">
                                <a href="tel:{{ $user->telefono }}" class="rounded-lg " style="background-color: rgb(0 106 255); padding: 0.5rem; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5); ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-12">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                </a>
                                <span class="mt-2 text-white flex justify-center">Llamada</span>
                            </div>
                            <!-- Botón para abrir el modal -->
                            <div class="flex flex-col justify-center">
                                <button id="openModal" class="text-black bg-white rounded-lg" style="padding: 0.5rem; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5); ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z" />
                                    </svg>
                                </button>
                                <span class="mt-2 text-white flex justify-center">QR</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-col justify-center " style="margin-top: 2.5rem">
                        <div class="flex gap-2 items-center justify-center " style="margin-top: 2.5rem">
                            <div class="flex justify-center">
                                <button
                                    class="p-button p-component p-button-raised p-button-text border-none text-lg shadow-lg rounded-lg p-2"
                                    type="button"
                                    style="background-color: rgb(103 232 249);"
                                    onclick="downloadVCard()">
                                    <span class="flex justify-center items-center">
                                        <div class="flex flex-col items-center " style="color: rgb(0 150 214);">
                                            <strong style="display: block;">Guardar</strong>
                                            <strong style="display: block;">contacto</strong>
                                        </div>
                                        <span class="ml-3" style="margin-left: 0.75rem">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 42.5" width="40px" height="35px">
                                                <defs>
                                                    <style>
                                                        .cls-1,
                                                        .cls-2 {
                                                            fill: none;
                                                            stroke: #0071bc;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                        }

                                                        .cls-1 {
                                                            stroke-width: 1.8px;
                                                        }

                                                        .cls-2 {
                                                            stroke-width: 5px;
                                                        }
                                                    </style>
                                                </defs>
                                                <g id="Capa_2" data-name="Capa 2">
                                                    <g id="Capa_1-2" data-name="Capa 1">
                                                        <path class="cls-1" d="M.9,41.6V33.9s.71-5,4.59-5,5.29-.7,5.64-3.88" />
                                                        <path class="cls-1" d="M11.13,12.76C11,12.58,8.31,15.13,9,18a1.72,1.72,0,0,0-1.77,2.12c.35,2.12,1.92,1.6,1.92,1.6s1.26,4.4,5.14,4.75,6-4.58,6-4.58,2-.59,1.71-2.24S21,18,21,18a4.25,4.25,0,0,1-2.47-4.58S14,15.68,11.13,12.76Z" />
                                                        <path class="cls-1" d="M28,41.6V34.49a5.64,5.64,0,0,0-4.86-5.6c-1.76-.35-4.34-.18-5.88-3.26" />
                                                        <path class="cls-1" d="M9.29,28.34a6,6,0,0,0,5,2.32,6.73,6.73,0,0,0,5.32-2.58" />
                                                        <line class="cls-1" x1="5.49" y1="35.95" x2="5.49" y2="41.6" />
                                                        <line class="cls-1" x1="23.13" y1="35.95" x2="23.13" y2="41.6" />
                                                        <line class="cls-1" x1="14.46" y1="37.19" x2="20.31" y2="37.19" />
                                                        <path class="cls-1" d="M7.46,18.71s-2-2.87.5-7.46,7.65-3.36,9.29-2.39a10.87,10.87,0,0,1,3.41,3.45c.71,1.06,1.85,2.22,1.1,6.4" />
                                                        <line class="cls-2" x1="29.98" y1="2.5" x2="29.98" y2="13.53" />
                                                        <line class="cls-2" x1="35.5" y1="8.01" x2="24.47" y2="8.01" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                    </span>

                                </button>
                            </div>
                            <div class="flex justify-center items-center">
                                <div class="flex justify-center ">
                                    <button id="shareButton" class="p-button p-component p-button-raised p-button-text text-md shadow-lg rounded-lg p-2" type="button" onclick="shareContent()" style="color: rgb(0 106 255); border-width: 3px; border-color: rgb(103 232 249);">
                                        <span class="flex items-center text-black">
                                            <span class="" style="color: rgb(103 232 249); border-color: rgb(103 232 249);">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="width: 50px; height: 50px; vertical-align: -0.125em; transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="iconify" data-icon="mdi:share-variant">
                                                    <path fill="currentColor" d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81a3 3 0 0 0 3-3a3 3 0 0 0-3-3a3 3 0 0 0-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.15c-.05.21-.08.43-.08.66c0 1.61 1.31 2.91 2.92 2.91s2.92-1.3 2.92-2.91A2.92 2.92 0 0 0 18 16.08"></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-6">
                            @include('layouts.navigation-user')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal QR-->
    <div id="qrModal" class="fixed inset-0 flex items-center justify-center hidden" style="background-color: rgba(0, 0, 0, 0.5)">
        <div id="modalContent" class="p-8 rounded-md shadow-lg ">
            <div class="flex justify-center p-6 bg-white rounded-lg">
                {!! QrCode::size(200)->generate(route('qr.compartir', ['token' => $user->login_token])) !!}
            </div>
        </div>
    </div>

    <script>
        function shareContent() {
            var loginToken = "{{ $user->login_token }}";
            var url = window.location.origin + '/compartir/' + loginToken;

            if (navigator.share) {
                navigator.share({
                    title: 'Compartir URL',
                    text: 'Echa un vistazo a esta URL:',
                    url: url
                }).then(() => {
                    console.log('Compartido con éxito');
                }).catch((error) => {
                    console.error('Error al compartir:', error);
                });
            } else {
                alert('La función de compartir no está disponible en este dispositivo.');
            }
        }

        function downloadVCard() {
            var firstName = "{{ $user->name }}";
            var lastName = "{{ $user->last_name }}";
            var phoneNumber = "{{ $user->telefono }}";
            var email = "{{ $user->email }}";

            var vCardData = `BEGIN:VCARD
                VERSION:3.0
                N:${lastName};${firstName};;;
                FN:${firstName} ${lastName}
                TEL;TYPE=CELL:${phoneNumber}
                EMAIL:${email}
            END:VCARD`;

            var blob = new Blob([vCardData], {
                type: 'text/vcard'
            });
            var url = URL.createObjectURL(blob);

            var a = document.createElement('a');
            a.href = url;
            a.download = `${firstName}_${lastName}.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);

            URL.revokeObjectURL(url);
        }

        // Abrir el modal
        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('qrModal').classList.remove('hidden');
        });

        // Cerrar el modal al hacer clic fuera del contenido
        document.getElementById('qrModal').addEventListener('click', function(event) {
            if (event.target === this) {
                document.getElementById('qrModal').classList.add('hidden');
            }
        });
    </script>
</x-app-layout>