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


// contador para practicar while
function contador($contador) {

    while ($contador >= 0){
        echo $contador."\n";
        $contador--;
    };

};

// validar si esta o no un id con DO while

function encontrarids($id){

    do {
        return "el Usuario $id ya esta en la base de datos";
    } while ( in_array($id, $ids) );

};




?>