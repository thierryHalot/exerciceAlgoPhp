<?php

function dessineUnCarre($cote)
{
//boucle qui nous permet de générer nos colonnes
    for ($i = 0; $i < $cote; $i++) {


//boucle qui nous permet de générer nos lignes
        for ($j = 0; $j < $cote; $j++) {

 //crée la ligne du bas et du haut
            if ($i == 0 || $i == $cote - 1) {

                echo "X";

            } else {
 //cree les ligne sur les coter gauche et droit
                if ($j == 0 || $j == $cote - 1) {

                    echo "X";
                } else {
//insere la croix dans notre carre
                    if ($j == $i || $j == ($cote - 1 - $i)) {

                        echo "X";
                    } else {
                        
//remplit les zone qui ne sont pas des croix
                        echo "o";

                    }

                }
            }
        }
//a chaque nouvelle ligne construite,on fait un passage à la ligne
        echo "\n";

    }
}

dessineUnCarre(20);