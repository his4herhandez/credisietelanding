<?php

require_once 'conexion.php';

Class LoginModel
{
    static public function AccesoCredenciales($user, $password)
    {
        $stmt = Conexion::conectar()->prepare("
            SELECT 
                ID, NOMBRE, APELLIDOS, USUARIO, PASSWORD, ESTADO
            FROM 
                USUARIOS 
            WHERE 
                USUARIO = :user AND PASSWORD = :password
        ");

        $stmt -> bindParam(":user", $user, PDO::PARAM_STR);
        $stmt -> bindParam(":password", $password, PDO::PARAM_STR);

        try {

            $stmt -> execute();
            $queryStatus = ['respuesta' => $stmt -> fetch(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {

            $queryStatus = ['respuesta' => $e->getMessage()];
        }

        $stmt = null;
        return $queryStatus;
    }
}