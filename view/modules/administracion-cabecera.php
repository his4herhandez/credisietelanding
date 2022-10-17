<?php
if (isset($_SESSION['inicio_sesion']) && $_SESSION['inicio_sesion'] == 'ok') {
?>
    <header class="bg-slate-800 flex justify-between h-14 md:h-10 items-center px-10">
        <h1 class="text-blanco">Administrador activo</h1>
        <div div="d-flex align-items-center">

            <!-- drawer init and show -->
            <div class="text-center">
                <button class="md:hidden text-azul font-medium rounded-lg text-sm px-3 py-2.5 mr-2" type="button" data-drawer-target="drawer-admin" data-drawer-show="drawer-admin" aria-controls="drawer-navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </button>
            </div>

            <!-- drawer component -->
            <div id="drawer-admin" class="fixed z-40 h-screen p-4 overflow-y-auto bg-slate-800 w-80 -translate-x-full" tabindex="-1" aria-labelledby="drawer-admin-label">
                <button type="button" data-drawer-dismiss="drawer-admin" aria-controls="drawer-admin" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center ">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="py-7 overflow-y-auto">
                    <ul class="space-y-2">
                        <li>
                            <a href="inicio" class="text-blanco  flex items-center p-2 text-base font-normal rounded-lg">
                                <span class="ml-3">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blanco  flex items-center p-2 text-base font-normal rounded-lg" id="dropdownEquiposAdmin" data-dropdown-toggle="admin_equipos" >
                                <span class="ml-3">Equipos</span>
                                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blanco flex items-center p-2 text-base font-normal rounded-lg">
                                <span class="flex-1 ml-3 whitespace-nowrap">Colores e iconos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blanco flex items-center p-2 text-base font-normal rounded-lg">
                                <span class="flex-1 ml-3 whitespace-nowrap">Sucursales</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown menu -->
                <div id="admin_equipos" class="hidden z-10 w-44 bg-slate-800 rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1 text-blanco/50 pl-8" aria-labelledby="dropdownEquiposAdmin">
                        <li>
                            <a href="administracion-equipos" class="block py-2 px-4 ">Todos los equipos</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 ">Administrar carrusel</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 ">Administrar listado</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class=" header_navegacion hidden md:flex p-4 rounded-lg  flex-row space-x-8 mt-0 font-medium">
            <li>
                <a href="inicio" class="text-blanco hover:text-azul font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
                    Inicio
                </a>
            </li>
            <li>
                <button id="dropdownEquipos" data-dropdown-toggle="dropdown" class="text-blanco hover:text-azul font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
                    Equipos
                </button>
            </li>
            <li>
                <button id="dropdownDesing" data-dropdown-toggle="desing" class="text-blanco hover:text-azul font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
                    Colores e iconos
                </button>
            </li>
            <li>
                <a href="#" class="text-blanco hover:text-azul font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
                    Sucursales
                </a>
            </li>
        </ul>
        <div id="dropdown" class="hidden z-10 w-44 bg-gray-900 te rounded divide-y divide-gray-100 shadow-lg">
            <ul class="py-1 text-sm text-blanco/50 " aria-labelledby="dropdownEquipos">
                <li>
                    <a href="administracion-equipos" class="block py-2 px-4 hover:bg-gray-100/20 hover:text-azul">Todos los equipos</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100/20 hover:text-azul">Administrar carrusel</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100/20 hover:text-azul">Administrar listado</a>
                </li>
            </ul>
        </div>
        <div id="desing" class="hidden z-10 w-44 bg-gray-900 te rounded divide-y divide-gray-100 shadow-lg">
            <ul class="py-1 text-sm text-blanco/50 " aria-labelledby="dropdownDesing">
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100/20 hover:text-azul">Administrar colores</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100/20 hover:text-azul">Iconos y logotipos</a>
                </li>
            </ul>
        </div>
        <a href="salir">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blanco">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
            </svg>
        </a>

    </header>
<?php
}
?>