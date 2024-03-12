<?php

const SIEMPRE= "Buenos Dias";

$saludo = "Hola";
$dias = (string) 6.78; //estoy es casting

$ids = [123456,654321,162534];

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



$marcas_a = array(
    "ferrari" => "rojo", 
    "Mclaren" => "negro", 
    "Toyata" => "blanco", 
    "Pegout" => "azul"
);

$marcas_b = [
    "Ford" => "Azul",
    "ferrari" => "blanco",
    "Mclaren" => "negro"
];

$cafe = ["latte","Capucchino", "Descafeinado"];

$precios = [15,22,12];

echo "La {$frutas["Manzana"]["Nombre"]} tiene un sabor {$frutas['Manzana']['Sabor']}"."\n";

require('functions.php');

$ropa = ["camisa","pantalon", "camiseta", "pantalon"];

$refill = array_fill(1,4,"Refill");
// echo Nombre("Johan","Pardo","Hombre")."\n";

// echo saborjugo($frutas["Manzana"]["Nombre"])."\n";


// echo contador(10)."\n";

// echo encontrarids(123456)."\n";

// echo sumarhastaten(2);

// echo colorcarros($marcas);

print_r(array_change_key_case($marcas_a,CASE_UPPER)) ."\n";
print_r(array_column($frutas,"Nombre"));
print_r(array_chunk($frutas,2,true));
print_r(array_combine($cafe,$precios));
print_r(array_merge($marcas_a,$cafe));
print_r(array_merge_recursive($marcas_a,$marcas_b));
print_r(array_count_values($ropa));

print_r(array_diff_assoc($marcas_a,$marcas_b));
print_r(array_diff_key($marcas_a,$marcas_b));
print_r(array_diff($marcas_a,$marcas_b));
print_r(array_fill_keys($cafe,12));

print_r($refill);

?>