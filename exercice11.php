<?php
//j'intitialise donc un tableau
$suite = array();

//je le remplie avec les deux premier nombre de la suite
$suite[0] = 0;
$suite[1] = 1;

$nombrePair = array();
$j = 1;
$nombreImpaire = array();
$multipleDeCinq = array();
$multipleDeTrois = array();
//je parcours mon tableau en commençant a l'index 2 et je génère ma suite de fibonacci comme l'exercice précédent
for($i = 2; $i < 20; $i++){

//je dit que mon index courant est égale a la somme des deux terme qui le précède... a l'index 3 0 + 1 = 1,puis a lindex 4 1 + 1 = 2 etc..
    $suite[$i]= $suite[$i-2] + $suite[$i-1];


}

//partie trie de mon tableaux

//je parcours mon tableau contenant ma suite de fibonacci
// (count est la meme chose que .lenght a la seul difference,c'est que c'est une fonction)
for ($j= 0; $j < count($suite);$j++) {


    //si je tombe sur un nombre paire je le range dans le tableau nombrePaire
    if ($suite[$j]%2 == 0) {

        array_push($nombrePair, $suite[$j]);



        //sinon si mon nombre est impaire je le range dans mon tableau nombreImpaire
    } else if(($suite[$j]%2 !== 0)) {

        array_push($nombreImpaire, $suite[$j]);

    //si c'est un multiple de cinq ,je le range dans le tableau multipleDeCinq
    }if(($suite[$j]%5 == 0)) {

        array_push($multipleDeCinq, $suite[$j]);

    //si c'est un multiple de trois,je le range dans le tableau multipleDeTrois
    }if(($suite[$j]%3 == 0)) {

        array_push($multipleDeTrois, $suite[$j]);


    }
}

//Partie afichage des resultats
//echo implode() permet d'afficher la valeur  contenue dans un tableau


//afichage du tableau suite
echo "le tableau suite contient : ". count($suite)." valeurs \n";

echo "les valeurs sont : ";
echo implode(", ", $suite) ;
echo "\n";

//afichage du tableau de nombre paire
echo "le tableau nombrePair contient : ". count($nombrePair)." valeurs \n";

echo "les valeurs sont : ";
echo implode(", ", $nombrePair) ;
echo "\n";

//afichage du tableau de nombre impaire
echo "le tableau nombreImpaire contient : ". count($nombreImpaire)." valeurs \n";

echo "les valeurs sont : ";
echo implode(", ", $nombreImpaire) ;
echo "\n";

//afichage du tableau multiple de cinq
echo "le tableau multipleDeCinq contient : ". count($multipleDeCinq)." valeurs \n";

echo "les valeurs sont : ";
echo implode(", ", $multipleDeCinq) ;
echo "\n";

//afichage du tableau multiple de trois
echo "le tableau multipleDeTrois contient : ". count($multipleDeTrois)." valeurs \n";

echo "les valeurs sont : ";
echo implode(", ", $multipleDeTrois) ;
echo "\n";
