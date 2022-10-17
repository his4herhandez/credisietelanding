<section class="bg-negro">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0">
        <div class="flex justify-center items-center flex-row text-azul">
            <h1 class="uppercase text-5xl translate-x-1 font-semibold">credi</h1><h1 class="text-7xl font-bold">7</h1>
        </div>
        <div class="w-full rounded-xl shadow dark:border md:mt-0 sm:max-w-md xl:p-0 bg-negro border-gray-700 border-2">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-blanco md:text-2xl dark:text-white">
                    Inicie sesión con su cuenta
                </h1>
                <form class="space-y-4 md:space-y-6" method="post">
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-blanco dark:text-white">Tu usuario</label>
                        <input type="username" name="username" id="username" class="bg-gray-700  focus:outline-none text-blanco sm:text-sm rounded-lg  block w-full p-2.5" placeholder="Ej. devpadmin" required="No has ingresado tu usuario">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-blanco dark:text-white">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-700  focus:outline-none text-blanco sm:text-sm rounded-lg  block w-full p-2.5" required="No has ingresado tu contraseña">
                    </div>
                    <div class="flex items-center justify-end">
                        <a href="#" class="text-sm font-medium text-blanco/50 text-decoration-none hover:text-azul">¿Olvídaste tu contraseña?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-azul focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ingresar</button>

                    <?php
                        $login = Login::AccesoCredenciales();
                    ?>
                </form>
            </div>
        </div>
    </div>
</section>