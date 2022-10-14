<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        }
    }
    ?>
</body>
</html>