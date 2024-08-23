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
                                <div class=" flex justify-center rounded-full overflow-hidden " style="border-width: 5px; border-color: rgb(0 150 214); width: 10rem; height: 10rem">
                                    <img src="{{ asset('storage/' . $user->profile_picture) }}">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="width: 24px; height: 24px; vertical-align: -0.125em; transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="iconify" data-icon="mdi:account-plus">
                                                <path fill="currentColor" d="M15 14c-2.67 0-8 1.33-8 4v2h16v-2c0-2.67-5.33-4-8-4m-9-4V7H4v3H1v2h3v3h2v-3h3v-2m6 2a4 4 0 0 0 4-4a4 4 0 0 0-4-4a4 4 0 0 0-4 4a4 4 0 0 0 4 4"></path>
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
                        <div class="flex justify-center">
                            <!-- Redes -->
                            <div class="flex justify-center text-sm mt-6 mb-6 gap-6">
                                @foreach($redes as $red)
                                @if($red->red_id == 1)
                                <a class="text-black " href="{{ $red->descripcion }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                    </svg>
                                </a>
                                @elseif($red->red_id == 2)
                                <a class="text-black " href="{{ $red->descripcion }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                    </svg>
                                </a>
                                @elseif ($red->red_id == 3)
                                <a class="text-black " href="{{ $red->descripcion }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                                    </svg>
                                </a>
                                @elseif ($red->red_id == 4)
                                <a class="text-black " href="{{ $red->descripcion }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                    </svg>
                                </a>
                                @elseif ($red->red_id == 5)
                                <a class="text-black " href="{{ $red->descripcion }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                    </svg>
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="flex justify-center">
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