<?php



function morningLive($morning)
{
    $matin = "Bonjour";
    $soir = "Bonsoir";



    if ($morning) {

        echo "$matin vous";
    } else if (!$morning) {

        echo "$soir vous";


    }

};

$morning = true;

morningLive($morning);

