<?php 


function sumarDosNumeros($numero1 = 1 , $numero2 = 1){
    return $numero1 + $numero2;
}

$suma = sumarDosNumeros(4,5);

echo $suma . ' ';
echo sumarDosNumeros(10, 5);



// $numero1 = 5;

// $numero2 = 10;

// $suma1 = $numero1 + $numero2;

// echo $suma1 . ' ';



// $numero3 = 6;

// $numero4 = 2;

// $suma2 = $numero3 + $numero4;

// echo $suma2;

function saludo(){
    echo 'HOLA MUNDO DESDE LA FUNCION';
}

saludo();

