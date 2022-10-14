        <!-- aqui esta incrustado el sidebar (include en plantilla) -->
        <div class="p-7 flex flex-column w-screen">
            <header class="grid grid-cols-3 h-14 bottom-2 mx-4">
                <div class="col-span-2 flex items-center p-2">
                    <h1 class="text-uppercase text-3xl text-negro font-bold">Administración de Equipos</h1>
                </div>
                <div class="flex justify-end items-center p-2">
                    <a href="salir" class="text-negro text-decoration-none text-2xl hover:text-negro">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-6xl">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                    </a>
                </div>
            </header>
            <main class="container">
                <section class="h-14 flex justify-end items-center">
                    <button class="text-blanco/70 bg-negro/80 hover:bg-negro focus:ring-4 focus:ring-blanco font-medium rounded-lg text-sm px-3 py-2.5 hover:text-azul" type="button" data-modal-toggle="modalAgregarEquipo">
                        Nuevo equipo
                    </button>
                </section>
            </main>
        </div>
    </div>

    <div id="modalAgregarEquipo" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-negro rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-4 rounded-t border-b border-b-blanco/50">
                <h3 class="text-xl font-semibold text-blanco/80">
                    Agregar un nuevo equipos
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalAgregarEquipo">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="modalAgregarEquipo" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
            </div>
        </div>
    </div>
</div>

    <!-- flowbite tailwind -->
    <script src="./src/flowbite/flowbite.js"></script>

    <!-- jquery -->
    <script src="./src/jquery/jquery.min.js"></script>

    <!-- datatables -->
    <script src="./src/datatables/datatables.min.js"></script>
    <script src="./src/datatables/jquery/jquery.dataTables.min.js"></script>
    <script src="./src/datatables/Responsive-2.2.8/js/dataTables.responsive.min.js"></script>

    <!-- scripts js -->
    
</body>

</html>
