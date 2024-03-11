<?php

function nombre ($nombre, $apellido, $genero) {

    if ($genero == "Hombre") {
        return "El es $genero y su nombre es $nombre y su apellido es $apellido"."\n";
    } else if ($genero == "Mujer") {
        return "Ella es $genero y su nombre es $nombre y su apellido es $apellido"."\n";
    } else {
        return "no es un humano";
    }
    
};

function saborjugo($fruta){
    switch ($fruta) {
        case "Manzana":
            return "El jugo es dulce";
          
        case "Piña":
            return "El jugo es acido";
           
        default:
            return "pailas no hay para hacer de ese jugo";
    }

};



function contador($contador) {

    while ($contador >= 0){
        echo $contador."\n";
        $contador--;
    };

};

?>