<?php

$variableEntiere = 243;

//tant que ma variable est supérieur a 0,je la décrémente
while($variableEntiere >= 0){

//pour cette exercice j'élimine les possibiliter petit a petit car l'odre des case est important,
//je part du plus large au plus petit,important le break nous fait sortir de la fonction
switch ($variableEntiere){

//dans le cas ou mon nombre est égale a 0
    case 0:

        echo $variableEntiere." est paire\n";
        break;
//dans le cas ou c'est un multiple de 5, de 10 et qu'il est paire,si il ne reste rien de ma division euclidienne alors....
        case $variableEntiere%2 == 0 && $variableEntiere%5 == 0 && $variableEntiere%10 == 0:
        echo $variableEntiere." est paire et c'est un multiple de 5 et de 10\n";
        break;
//dans le cas ou mon nombre est paire et que c'est un multiple de 5
    case $variableEntiere%2 == 0 && $variableEntiere%5 == 0:

        echo $variableEntiere." est paire et c'est un multiple de 5\n";
        break;
//dans le cas ou mon nombre est paire
    case $variableEntiere%2 == 0 :
        echo $variableEntiere." est paire\n";
        break;
//si c'est juste un multiple de 5
    case $variableEntiere%5 == 0 :
        echo $variableEntiere." est un multiple de 5\n";
        break;
//dans tous les autres cas ...
    default:

        echo $variableEntiere."\n";
}






    $variableEntiere--;

}