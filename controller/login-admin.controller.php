<?php

class Login
{

    static public function AccesoCredenciales()
    {
        if(isset($_POST['username'])) {
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["username"]) && preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["password"])) {

                $user = $_POST['username'];
                $password = $_POST['password'];

                $respuesta = LoginModel::AccesoCredenciales($user, $password);

                if(isset($respuesta['respuesta']['USUARIO'])) {

                    if(strtoupper($respuesta['respuesta']['USUARIO']) == strtoupper($user)){

                        $_SESSION['inicio_sesion'] = 'ok';
                        $_SESSION['nombre'] = $respuesta['respuesta']['NOMBRE'];
                        $_SESSION['nombre'] = $respuesta['respuesta']['APELLIDOS'];
                        $_SESSION['nombre'] = $respuesta['respuesta']['USUARIO'];

                        echo '
                        <script>
                            window.location = "inicio-admin"
                        </script>';
                    } else {

                        echo '
                        <script>
                            window.location = "index.php"
                        </script>';
                    }
                }
            }
        }
    }
}