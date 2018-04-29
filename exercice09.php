<?php
// pour pouvoir travailer dans cette exercice j'aurais besoin d'un tableau pour stocker mes nombres
$tableau = array();
$variableEntiere = 243;
$resultat;
$resultatPaire;


for($i = 0; $i <= 243; $i++){
//mes nombres se stocke les un après les autre dans mon tableau et ceci à chaque itération
    $tableau[$i] = $i;
}

//maintenant je dois ajouter la valeur des multiple de 10 avec la valeur precedente,hummm...comment faire !!!!
//commençons par parcourir mon tableaux

for ($i = 0; $i <= 243;$i++){

    //si il y a un multiple de 10 dans mon tableau
    if ($tableau[$i]%10 == 0 && $tableau[$i] != 0){

        echo $tableau[$i]." est un multiple de 10 \n";

//alors j'ajoute cette valeur avec ma valeur précédente
        $resultat = $tableau[$i] + $tableau[$i-1];
        echo $tableau[$i]." - " . $tableau[$i-1]." = ".$resultat."\n";

    }else{

        echo  $tableau[$i]. "\n";
    }
//si je trouve un multiple de deux
    if($tableau[$i%2] == 0 && $tableau[$i] != 0){

        //je l'ajoute au prochain
        $resultatPaire = $tableau[$i] + $tableau[$i+2];

        echo $tableau[$i]." + " . $tableau[$i+2]." = ".$resultatPaire."\n";
    }
// si j'ai un multiple de 5 qui est également un multiple de 3 alors...
    if ($tableau[$i]%5 == 0 && $tableau[$i]%3 == 0 && $tableau[$i] != 0){


        echo $tableau[$i]." vrai \n";

    }
}
