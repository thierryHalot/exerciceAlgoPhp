<?php
//---------------------Premiere partie--------------------------------------------------------------------

//initialisation d'un tableau a vide
$tableau = [];
$i = 0;

//ma longueur du tableau est de 10,donc je boucle 10 fois
while($i < 10){

//j'insere des boolean vrai à chaque itération
$tableau[$i] = "tata";


echo $tableau[$i]. " index : ". $i . " ;";
$i++;
}

//----------------------deuxieme partie----------------------------------------------------------------------





$i = 0;

//ma longueur du tableau est de 10,donc je boucle 10 fois
while($i < 10){

//j'insere des boolean vrai à chaque itération
    $tableau[$i] = "toto";


    echo $tableau[$i]. " index : ". $i . " ;";
    $i++;
}

var_dump($tableau);