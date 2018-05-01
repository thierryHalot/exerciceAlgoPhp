<?php

//j'initialise mes deux variable,on ne peut pas déclarer directement un boolean en php
$flag == false;
$variableEntiere = 0;



//on rentre dans la condition
if($flag == false){

//+1
    $variableEntiere++;
}



//on rentre pas dans la condition
if($flag == true){



    $variableEntiere--;
}

//on inverse la valeur de flag
$flag = !$flag;

//de ce fait on rentre dans la condition
if($flag == true){

//+1
    $variableEntiere++;
}

//on ne rentre pas dans la condition
if($flag == false){


    $variableEntiere--;
}

//le resultat de m'a variable entiere sera égale a deux


