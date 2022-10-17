<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="src/admin.css">
    <link rel="stylesheet" href="src/landing.css">
    <title>CREDI7</title>
</head>
<style>
    .header_navegacion:hover {
        color: #FFE000;
        transition: ease-in-out 0.25s;
    }

    .footer_navegacion:hover {
        color: #FFE000;
        transition: ease-in-out 0.25s;
    }
</style>

<body>

    <?php

    include 'modules/administracion-cabecera.php';

    if (isset($_GET["ruta"])) {
        $rua = $_GET['ruta'];
        switch ($_GET["ruta"]) {
            case 'inicio':
                include 'modules/cabecera-landing.php';
                include 'modules/pie-landing.php';
                break;
            case 'salir':
                include 'modules/salir-admin.php';
                break;
            case 'login':
                include 'modules/login-admin.php';
                break;
            case 'administracion-equipos':
                include 'modules/administracion-equipos.php';
                break;
        }
    }
    ?>

    <script src="./src/jquery/jquery.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</body>

</html>