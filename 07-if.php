<?php

$edad = 10;

if ($edad >= 18) {
    //
    echo "El usuario es mayor de edad";
} else {
    //
    echo "El usuario es menor de edad";
}

// 1 = lunes, 2 martes, 3 miercoles $valor de $dia 1 hasta el 7

$dia = 1;

if ($dia == 1) {
    echo 'Lunes';
} elseif ($dia == 2) {
    echo 'Martes';
} elseif ($dia == 3) {
    echo 'Miercoles';
} else {
    echo "Domingo";
}

$dia = '1';

if ($dia === 1)
    echo ' cumple';
else
    echo ' no cumple';

// and or

if($dia == 1 && $dia == 2){ // La condicion deberia de ser verdadera en las 2 condiciones

}else{
    echo ' no cumple la condicion';
}


if($dia == 1 || $dia == 2){
    echo ' Cumple una de las condiciones';
}

$booleano = true;

if(!$booleano)
{
    echo 'cumple';
}else{
    echo ' no cumple';
}

if(false){

}else{

}





