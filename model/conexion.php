<?php

class Conexion
{

	public static function conectar()
	{
		$link = new PDO(
			"mysql:host=localhost;dbname=credisiete;charset=utf8mb4",
			"root",
			"",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
		);

		return $link;
	}

}