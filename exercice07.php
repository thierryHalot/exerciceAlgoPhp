<?php



function morningLive($morning,$phraseMatin,$phraseDuSoir)
{


    if ($morning) {

        echo "$phraseMatin";
    } else if (!$morning) {

        echo "$phraseDuSoir";


    }

};

$morning = true;

morningLive($morning,"c'est le matin", "c'est le soir");

