<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 rounded-lg flex justify-center items-center my-auto">
    <div class="flex justify-center bg-white rounded-lg">
        <div class="flex justify-between text-sm p-6" style="white-space: nowrap;">
            @if ($user->login_token)
            <a href="{{ route('compartir.show', ['login_token' => $user->login_token]) }}" target="_blank" style="border-right: 1px solid #d1d5db; padding-right: 12px; margin-right: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.84 34.8" width="40px" height="35px" class="mx-auto">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #29abe2;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 1.8px;
                            }
                        </style>
                    </defs>
                    <g id="Capa_2" data-name="Capa 2">
                        <g id="Capa_1-2" data-name="Capa 1">
                            <path class="cls-1" d="M.9,34.55V26.86s.71-5,4.59-5,5.29-.71,5.64-3.89" />
                            <path class="cls-1" d="M11.13,5.71C11,5.53,8.31,8.09,9,10.91A1.72,1.72,0,0,0,7.25,13c.35,2.11,1.92,1.59,1.92,1.59s1.26,4.4,5.14,4.76,6-4.59,6-4.59,2-.59,1.71-2.24-1-1.64-1-1.64a4.27,4.27,0,0,1-2.47-4.59S14,8.64,11.13,5.71Z" />
                            <path class="cls-1" d="M28,34.55V27.44a5.63,5.63,0,0,0-4.86-5.59c-1.76-.36-4.34-.18-5.88-3.27" />
                            <path class="cls-1" d="M9.29,21.29a6,6,0,0,0,5,2.32A6.74,6.74,0,0,0,19.63,21" />
                            <line class="cls-1" x1="5.49" y1="28.9" x2="5.49" y2="34.55" />
                            <line class="cls-1" x1="23.13" y1="28.9" x2="23.13" y2="34.55" />
                            <line class="cls-1" x1="14.46" y1="30.14" x2="20.31" y2="30.14" />
                            <path class="cls-1" d="M7.46,11.67s-2-2.88.5-7.47S15.61.84,17.25,1.82a10.75,10.75,0,0,1,3.41,3.44c.71,1.06,1.85,2.23,1.1,6.41" />
                        </g>
                    </g>
                </svg>
                <strong class="mt-2 mx-auto" style="color: rgb(0, 117, 190);">Contacto</strong>
            </a>
            @endif
            @if($user->nosotros)
            <a class="text-black" href="{{ route('nosotros.compartir', ['token' => $user->login_token]) }}" target="_blank" style="border-right: 1px solid #d1d5db; padding-right: 12px; margin-right: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.68 36.8" width="40px" height="35px">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #29abe2;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 1.8px;
                            }
                        </style>
                    </defs>
                    <g id="Capa_2" data-name="Capa 2">
                        <g id="Capa_1-2" data-name="Capa 1">
                            <polyline class="cls-1" points="2.24 12.17 6.34 12.88 5.16 26.08 0.9 26.08" />
                            <path class="cls-1" d="M21.69,13.49s-2.36-1.18-7.48-.4-8,1.32-8,1.32" />
                            <line class="cls-1" x1="5.31" y1="24.5" x2="9.85" y2="27.45" />
                            <path class="cls-1" d="M32.16,14.41s-.71.13-4.8-.79-6.07-.53-10,2.62S18.54,21,20.31,19.8s3.51-1.95,5.59,0S31,24.5,31,24.5l4.81-2.87" />
                            <polyline class="cls-1" points="39.78 20.57 36.63 22.14 31.6 13.62 34.51 11.19" />
                            <path class="cls-1" d="M9.1,4.05c.39,0,5.5,5.5,5.5,5.5" />
                            <line class="cls-1" x1="19.33" y1="0.9" x2="19.33" y2="8.02" />
                            <line class="cls-1" x1="30.37" y1="4.05" x2="24.56" y2="9.55" />
                            <path class="cls-1" d="M12.18,32.76h0a1.59,1.59,0,0,1-.36-2.2l3.39-4.69a1.58,1.58,0,0,1,2.56,1.85l-3.39,4.69A1.58,1.58,0,0,1,12.18,32.76Z" />
                            <path class="cls-1" d="M10.24,30.06h0a1.59,1.59,0,0,1-.36-2.2l2.16-3a1.58,1.58,0,0,1,2.2-.36,1.6,1.6,0,0,1,.36,2.21l-2.16,3A1.58,1.58,0,0,1,10.24,30.06Z" />
                            <path class="cls-1" d="M17.91,35.6h0a1.57,1.57,0,0,1-.36-2.2l2.16-3a1.58,1.58,0,0,1,2.55,1.85l-2.15,3A1.58,1.58,0,0,1,17.91,35.6Z" />
                            <path class="cls-1" d="M14.73,34.61h0a1.58,1.58,0,0,1-.35-2.2l3.39-4.69a1.58,1.58,0,1,1,2.55,1.85l-3.39,4.68A1.57,1.57,0,0,1,14.73,34.61Z" />
                            <path class="cls-1" d="M23.33,26.2,27.7,30a1.58,1.58,0,1,1-2.07,2.38l-4.37-3.79" />
                            <path class="cls-1" d="M22.06,29.27l2.78,2.41a1.58,1.58,0,1,1-2.05,2.38l-2.78-2.41" />
                            <path class="cls-1" d="M14.21,19.77c.78,0,3.24-.94,5.16-2.56s3.35-3.57,3.36-3.58" />
                            <path class="cls-1" d="M12.26,20.91s.85-.82,2.41-2.2,3.67-2.5,5.29-3.5,4.28-2,5.81-3.19c.77-.55,1.68-.76,2.59-.49" />
                        </g>
                    </g>
                </svg>
                <strong class="mt-2 mx-auto" style="color: rgb(0, 117, 190);">Nosotros</strong>
            </a>
            @endif
            @if ($user->ubicacion)
            <a class="text-black" href="{{ route('ubicacion.compartir', ['token' => $user->login_token]) }}" target="_blank" style="border-right: 1px solid #d1d5db; padding-right: 12px; margin-right: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.15 34.8" width="40px" height="35px">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #29abe2;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 1.8px;
                            }
                        </style>
                    </defs>
                    <g id="Capa_2" data-name="Capa 2">
                        <g id="Capa_1-2" data-name="Capa 1">
                            <path class="cls-1" d="M13.06.9a11.65,11.65,0,0,1,6.13,1.7,12.45,12.45,0,0,1,4.43,4.57,12.26,12.26,0,0,1,1.63,6.18,16.93,16.93,0,0,1-2,7.31c-1.3,2.06-2.8,4.19-4.48,6.39s-3,3.9-4,5.09L13.21,33.9c-.18-.15-.42-.38-.73-.69s-.91-1-1.8-1.92S8.93,29.36,8.1,28.37s-1.76-2.19-2.79-3.63A48.27,48.27,0,0,1,2.6,20.55,17.19,17.19,0,0,1,.9,13.49a12.4,12.4,0,0,1,1-4.81,13.13,13.13,0,0,1,2.6-4A12.24,12.24,0,0,1,8.34,1.92,11.36,11.36,0,0,1,13.06.9Z" />
                            <path class="cls-1" d="M17.27,7.69A5.57,5.57,0,0,0,13.18,6a5.61,5.61,0,0,0-4.09,1.7,5.62,5.62,0,0,0-1.7,4.11,5.53,5.53,0,0,0,1.7,4.08,5.6,5.6,0,0,0,4.09,1.69,5.56,5.56,0,0,0,4.09-1.69A5.53,5.53,0,0,0,19,11.8,5.62,5.62,0,0,0,17.27,7.69Z" />
                        </g>
                    </g>
                </svg>
                <strong class="mt-2 mx-auto " style="color: rgb(0, 117, 190);">Dirección</strong>
            </a>
            @endif
            @if ($user->servicios)
            <a class="text-black" href="{{ route('servicios.compartir', ['token' => $user->login_token]) }}" target="_blank" style="border-right: 1px solid #d1d5db; padding-right: 12px; margin-right: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.4 34.8" width="40px" height="35px">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #29abe2;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 1.8px;
                            }
                        </style>
                    </defs>
                    <g id="Capa_2" data-name="Capa 2">
                        <g id="Capa_1-2" data-name="Capa 1">
                            <path class="cls-1" d="M37.5,21.24s-7.13-3.79-12.14-.91-12,6.07-11.08,8.8,6.07-1.51,8.8-1.82,4.71-.61,4.71-.61" />
                            <path class="cls-1" d="M37.5,30.05a13.91,13.91,0,0,0-8.95,2c-4.1,2.73-9.42,2.27-14.35,0S-1,24,1.22,22.15s11.69,4.1,11.69,4.1" />
                            <path class="cls-1" d="M5.47,20.78s2.05-2.59,9.22,3.87" />
                            <path class="cls-1" d="M10.08,19.25s2.07-.89,6.78,3.81" />
                            <path class="cls-1" d="M14.2,19.18s1.12-1.22,5,2.62" />
                            <line class="cls-1" x1="13.34" y1="11.9" x2="16.86" y2="16.63" />
                            <line class="cls-1" x1="20.34" y1="9.9" x2="20.2" y2="17.75" />
                            <line class="cls-1" x1="27.34" y1="11.9" x2="23.64" y2="16.63" />
                            <rect class="cls-1" x="8.66" y="3.18" width="5.92" height="5.92" rx="1.73" />
                            <rect class="cls-1" x="17.31" y="0.9" width="5.92" height="5.92" rx="1.73" />
                            <rect class="cls-1" x="25.81" y="3.18" width="5.92" height="5.92" rx="1.73" />
                        </g>
                    </g>
                </svg>
                <strong class="mt-2 mx-auto " style="color: rgb(0, 117, 190);">Servicios</strong>
            </a>
            @endif
            @if ($user->redes)
            <a class="text-black" href="{{ route('redes.compartir', ['token' => $user->login_token]) }}" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.84 34.8" width="40px" height="35px">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #29abe2;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 1.8px;
                            }
                        </style>
                    </defs>
                    <g id="Capa_2" data-name="Capa 2">
                        <g id="Capa_1-2" data-name="Capa 1">
                            <path class="cls-1" d="M22.38,24.49a13.2,13.2,0,1,1,2.73-2.95" />
                            <path class="cls-1" d="M7.63,17.05s1.8,3.59,7.18,3.59,6.8-3.59,6.8-3.59" />
                            <line class="cls-1" x1="10.77" y1="8.98" x2="10.77" y2="12.01" />
                            <line class="cls-1" x1="18.85" y1="8.98" x2="18.85" y2="12.01" />
                            <rect class="cls-1" x="22.44" y="21.54" width="4.04" height="11.66" rx="1.56" />
                            <path class="cls-1" d="M26.48,23.39s2.77-2.75,4.3-4.54.63-4,2.87-4,.45,6.28,0,6.73c0,0,6.29-.9,6.29,1.35s-3.39,1.6-3.39,1.6S39,24.68,39,26s-3.15,1.34-3.15,1.34,2.7.45,2.7,1.8S35,30.51,35,30.51s3.14.45,2.69,1.8-8.07,3.08-11.21-.7" />
                        </g>
                    </g>
                </svg>
                <strong class="mt-2 mx-auto " style="color: rgb(0, 117, 190);">Redes</strong>
            </a>
            @endif
        </div>
    </div>
</nav>