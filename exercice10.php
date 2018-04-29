<?php

/** La suite de Fibonacci est une suite d'entiers dans laquelle chaque terme est la somme des deux termes qui le précèdent.
 * Elle commence généralement par les termes 0 et 1 (parfois 1 et 1)
 * et ses premiers termes sont : 0, 1, 1, 2, 3, 5, 8, 13, 21, etc
 */


//j'intitialise donc un tableau
$NombreFibonacci = array();

//je les rempli avec les deux premier nombre de la suite
$NombreFibonacci[0] = 0;
$NombreFibonacci[1] = 1;

//je parcours mon tableau en commençant a l'index 2
for($i = 2; $i < 100; $i++){

//je dit que mon index courant est égale a la somme des deux terme qui le précède... a l'index 3 0 + 1 = 1,puis a lindex 4 1 + 1 = 2 etc..
    $NombreFibonacci[$i]= $NombreFibonacci[$i-2] + $NombreFibonacci[$i-1];
    
    echo $NombreFibonacci[$i-2]." + ".$NombreFibonacci[$i-1]." = ".$NombreFibonacci[$i]."\n";
}

