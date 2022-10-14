<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind -->
    <link rel="stylesheet" href="./src/out.css">

    <!-- datatable -->
    <link rel="stylesheet" href="./src/datatables/datatables.min.css">

    <!-- scripts -->
    <script src="./src/sweetalert/sweetalert.min.js?v=<?php echo rand(); ?>"></script>
    <script src="./src/fontawesome/icons.js?v=<?php echo rand(); ?>"></script>
    <script src="./src/javascript/admin.js?v=<?php echo rand(); ?>"></script>
    <title>CREDI7 ADMIN</title>
</head>
<!-- 252422 -->

<body>
    <div class="flex">
        <!-- sidebar -->
        <div class="bg-negro h-screen p-4 pt-8 w-72 duration-200 relative" id="sidebarAdmin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 bg-white text-negro text-1xl 
                rounded-full absolute -right-3 top-9 p-1 border-2 border-negro cursor-pointer duration-200" onclick="setOpen(this);" id="indicator_sidebar">
                <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z" clip-rule="evenodd" />
            </svg>
            <a href="inicio-admin">
                <div class="inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white text-3xl rounded cursor-pointer float-left mr-2 duration-500 self-center mx-auto" id="icono_admin"">
                        <path stroke-linecap=" round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                    </svg>
                    <h1 class="text-azul origin-left fw-normal text-2xl ml-2 duration-200" id="title_sidebar" style="display: inline-flex;">CREDI7 ADMIN</h1>
                </div>
            </a>

            <!-- inicio -->
            <a href="inicio-admin">
                <ul class="pt-8">
                    <li class="text-blanco/50 text-sm flex items-center gap-x-3 cursor-pointer p-1 hover:bg-slate-50/20 hover:text-azul rounded-md" title="Inicio">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                        <span id="inicio_sidebar">Inicio</span>
                    </li>
                </ul>
            </a>
            <!-- fin inicio -->

            <!-- colores -->
            <ul class="pt-8">
                <li class="text-blanco/50 text-sm flex items-center gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 hover:text-azul rounded-md" title="Colores e iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                    <button type="button" class="flex items-center w-full text-base font-normal transition duration-75 rounded-lg group" id="colores_admin" aria-controls="dropdown-landing" data-collapse-toggle="dropdown-landing" onclick="validarDropdown(this);">
                        <span class="flex-1 text-sm text-left whitespace-nowrap" sidebar-toggle-item>Colores e iconos</span>
                        <svg sidebar-toggle-item class="w-6 h-6 rotate-90 duration-150" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" id="dropdown_landing" >
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </li>
            </ul>
            <ul id="dropdown-landing" class="hidden py-2 space-y-2 pl-8">
                <li>
                    <a href="colores-admin" class=" text-decoration-none hover:text-azul flex items-center w-full text-blanco/50 text-sm gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 rounded-md">Administrar colores</a>
                </li>
                <li>
                    <a href="iconos-admin" class=" text-decoration-none hover:text-azul flex items-center w-full text-blanco/50 text-sm gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 rounded-md">Iconos y logotipos</a>
                </li>
            </ul>
            <!--  fin colores -->

            <!-- equipos -->
            <ul class="pt-8">
                <li class="text-blanco/50 text-sm flex items-center gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 hover:text-azul rounded-md" title="Equipos">
                    <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone" data-dropdown-placement="right-start" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M8.625.75A3.375 3.375 0 005.25 4.125v15.75a3.375 3.375 0 003.375 3.375h6.75a3.375 3.375 0 003.375-3.375V4.125A3.375 3.375 0 0015.375.75h-6.75zM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 017.5 19.875V4.125z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="dropdown-phone" class="hidden z-50 w-44 bg-negro rounded divide-y divide-gray-100/50 shadow">
                        <ul class=" text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-phone-button">
                            <li>
                                <a href="equipos-admin" class="block py-2 px-4 text-decoration-none hover:text-azul items-center w-full text-blanco/50 text-sm gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 rounded-md">Todos los equipos</a>
                            </li>
                            <li>
                                <a href="carrusel-admin" class="block py-2 px-4 text-decoration-none hover:text-azul items-center w-full text-blanco/50 text-sm gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 rounded-md">Administrar carruseles</a>
                            </li>
                            <li>
                                <a href="caracteristicas-admin" class="block py-2 px-4 text-decoration-none hover:text-azul items-center w-full text-blanco/50 text-sm gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 rounded-md">Característica equipos</a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="flex items-center w-full text-base font-normal transition duration-75 rounded-lg group" id="equipos_admin" aria-controls="dropdown-equipos" data-collapse-toggle="dropdown-equipos" onclick="validarDropdown(this);">
                        <span class="flex-1 text-sm text-left whitespace-nowrap" sidebar-toggle-item>Equipos</span>
                        <svg sidebar-toggle-item class="w-6 h-6 rotate-90 duration-150" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" id="dropdown_phone" >
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </li>
            </ul>
            <ul id="dropdown-equipos" class="hidden py-2 space-y-2 pl-8">
                <li>
                    <a href="equipos-admin" class=" text-decoration-none hover:text-azul flex items-center w-full text-blanco/50 text-sm gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 rounded-md">Todos los equipos</a>
                </li>
                <li>
                    <a href="carrusel-admin" class=" text-decoration-none hover:text-azul flex items-center w-full text-blanco/50 text-sm gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 rounded-md">Administrar carruseles</a>
                </li>
                <li>
                    <a href="caracteristicas-admin" class=" text-decoration-none hover:text-azul flex items-center w-full text-blanco/50 text-sm gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 rounded-md">Característica equipos</a>
                </li>
            </ul>
            <!-- fin equipos -->

            <!-- banner -->
            <a href="banner-admin">
                <ul class="pt-8">
                    <li class="text-blanco/50 text-sm flex items-center gap-x-3 cursor-pointer  p-1  hover:bg-slate-50/20 hover:text-azul rounded-md" title="Banner">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                        </svg>
                        <span id="banner_sidebar">Banner</span>
                    </li>
                </ul>
            </a>
            <!-- banner -->

            <!-- sucursales -->
            <a href="sucursales-admin">
                <ul class="pt-8">
                    <li class="text-blanco/50 text-sm flex items-center gap-x-3 cursor-pointer  p-1 hover:bg-slate-50/20 hover:text-azul rounded-md" title="Sucursales">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        <span id="sucursales_sidebar">Sucursales</span>
                    </li>
                </ul>
            </a>
            <!-- fin sucursales -->
        </div> 
        <!-- fin de sidebar -->
