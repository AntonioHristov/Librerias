<?php
//Declaro Librerias Php

$libreria = include_once("php/Antonio_Hristov_1.0.1.php");

//
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pruebas</title>
    <!-- 
	Declaro librerias De Estilos
	-->		
	<link rel="stylesheet" href="css/Antonio_Hristov.css" type="text/css">
	<!-- -->
</head>
<body>


    <?php

/*

DROP DATABASE IF EXISTS db_prueba;

CREATE DATABASE db_prueba;

CREATE TABLE nombre(
    id_nombre int PRIMARY key AUTO_INCREMENT,
    txt_apodo varchar(255)
);

INSERT INTO `nombre` (`id_nombre`, `txt_apodo`) VALUES (NULL, 'hola');

INSERT INTO `nombre` (`id_nombre`, `txt_apodo`) VALUES (NULL, 'algo');

*/


$nombre_db = "db_prueba";
$usuario = "root";
$contrasenia = "";
$host = "localhost";

$idNombreBuscar = 1;
$nombreCampoMostrar = "txt_apodo";

$conexion = devolver_conexion_base_datos_pdo_ahphp($nombre_db, $usuario, $contrasenia, $host);

$consulta = $conexion->prepare
(
    "SELECT * FROM `nombre` WHERE `id_nombre` = :id_name"
);

$consulta->bindParam('id_name', $idNombreBuscar);

$consulta->execute();

try 
{
    foreach ($consulta as $clave => $valor)
    {
        echo $valor[$nombreCampoMostrar];
    }

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}



































/*
$array = ["a", "b", "c", "d", "e"];
$posicion_eliminar=3;


escribir_informacion_ahphp
(

    devolver_array_eliminar_posicion_ahphp
    (
        $array
        , 
        $posicion_eliminar
        , 
        ordenar_array_ahphp //no_ordenar_array_ahphp
    )
    ,
    sin_detalles_ahphp
    
);
*/







// Crea una capa personalizable y personalizada con clases en código html
//escribir_capa_abrir_ahphp("id_capa_1", "name_capa_1", "fondo_azul_ahcss tamanio_50px_alto_ahcss tamanio_50px_ancho_ahcss", escribir_ahphp); 

// No olvidar cerrar la capa/s abierta/s en algún momento (Cuando se ejecutó el código html).
//escribir_capa_cerrar_ahphp();

/*
$etiqueta =
escribir_etiqueta_crear_ahphp
(
    "id_capa_1"
    , 
    "name_capa_1"
    , 
    "fondo_azul_ahcss tamanio_50px_alto_ahcss tamanio_50px_ancho_ahcss"
    , 
    "div"
    , 
    array("atr1", "val1", "atr2", "val2", "atr3", "val3")
    , 
    "holiwis"
    , 
    devolver_resultado_ahphp
);

escribir_ahphp($etiqueta);
*/


    ?>
</body>
</html>