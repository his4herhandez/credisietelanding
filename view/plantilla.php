<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/out.css">
    <link rel="stylesheet" href="src/output.css">
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
    if(isset($_SESSION['inicio_sesion']) && $_SESSION['inicio_sesion'] == 'ok') {
    
        if (isset($_GET["ruta"])) {

            switch ($_GET["ruta"]) {
                    // PRINCIPAL
                case "inicio":
                    include 'modules/cabecera-landing.php';
                    include 'modules/inicio-landing.php';
                    include 'modules/pie-landing.php';
                    break;
                    
                case "equipos":
                    include 'modules/cabecera-landing.php';
                    include 'modules/inicio-landing.php';
                    include 'modules/pie-landing.php';
                    break;

                case "cotizar":
                    include 'modules/cabecera-landing.php';
                    include 'modules/inicio-landing.php';
                    include 'modules/pie-landing.php';
                    break;

                case "sucursales":
                    include 'modules/cabecera-landing.php';
                    include 'modules/inicio-landing.php';
                    include 'modules/pie-landing.php';
                    break;

                case 'login':
                    include_once 'modules/login-admin.php';
                    break;

                case 'salir':
                    include_once 'modules/logout-admin.php';
                    break;

                case 'inicio-admin':
                    include_once 'modules/cabecera-admin.php';
                    include_once 'modules/inicio-admin.php';
                    break;

                case 'equipos-admin':
                    include_once 'modules/cabecera-admin.php';
                    include_once 'modules/equipos-admin.php';
                    break;
            }
        }
    } else {
        include 'modules/login-admin.php';
    }
    ?>
</body>
</html>