<?php

$dia = 'gato';

// if ($dia == 1) {
//     echo 'Lunes';
// } elseif ($dia == 2) {
//     echo 'Martes';
// } elseif ($dia == 3) {
//     echo 'Miercoles';
// } else {
//     echo "Domingo";
// }

switch ($dia) {
    case 1:
        echo 'Lunes';
        break;
    case "gato":
        echo 'Es un gato';
        break;
    default:
        echo 'Debe ingresar numero de 1 hasta el 7';
        break;
}
