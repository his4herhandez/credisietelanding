<header id="header" class="bg-slate-50 flex flex-row justify-between items-center  px-5 py-2">
    <div class="flex items-center header_logo">
        <span class="font-semibold text-4xl uppercase translate-x-1">credi</span><label class="font-bold text-6xl">7</label>
    </div>
    <div div="d-flex align-items-center">

        <!-- drawer init and show -->
        <div class="text-center">
            <button class="md:hidden text-azul font-medium rounded-lg text-sm px-3 py-2.5 mr-2" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </button>
        </div>

        <!-- drawer component -->
        <div id="drawer-navigation" class="fixed z-40 h-screen p-4 overflow-y-auto bg-slate-50 w-80 -translate-x-full" tabindex="-1" aria-labelledby="drawer-navigation-label">
            <button type="button" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center ">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <div class="py-7 overflow-y-auto">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="header_logo  flex items-center p-2 text-base font-normal rounded-lg">
                            <span class="ml-3">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="header_logo flex items-center p-2 text-base font-normal rounded-lg">
                            <span class="flex-1 ml-3 whitespace-nowrap">Equipos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="header_logo flex items-center p-2 text-base font-normal rounded-lg">
                            <span class="flex-1 ml-3 whitespace-nowrap">Sucursales</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <ul class=" header_navegacion hidden md:flex p-4 rounded-lg  flex-row space-x-8 mt-0 font-medium">
            <li>
                <a href="#" class=" header_navegacion block py-2 pr-4 pl-3" aria-current="page">Inicio</a>
            </li>
            <li>
                <a href="#" class=" header_navegacion block py-2 pr-4 pl-3 ">Equipos</a>
            </li>
            <li>
                <a href="#" class=" header_navegacion block py-2 pr-4 pl-3 ">Sucursales</a>
            </li>
        </ul>
    </div>

</header>