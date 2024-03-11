<?php

const SIEMPRE= "Buenos Dias";

$saludo = "Hola";
$dias = (string) 6.78; //estoy es casting

$frutas = [
    "Manzana" =>array(
        "Nombre" => "Manzana",
        "Color" => "Roja",
        "Sabor" => "Dulce"
    ), 
    "Pera"=> array(
        "Nombre" => "Pera",
        "Color" => "Verde",
        "Sabor" => "Dulce"    
    ), 
    "Piña" => array (
        "Nombre" => "Piña",
        "Color" => "Amarillo",
        "Sabor" => "Acida"
    ), 
    "Naranja" => array (
        "Nombre" => "Naranja",
        "Color" => "Amarillo",
        "Sabor" => "Acida"
    )];


$marcas = array("ferrari", "Mclaren", "Toyata", "Pegout");

echo "La {$frutas["Manzana"]["Nombre"]} tiene un sabor {$frutas['Manzana']['Sabor']}"."\n";

require('functions.php');


echo  Nombre("Johan","Pardo","Hombre")."\n";

echo saborjugo($frutas["Naranja"]["Nombre"]);


?>