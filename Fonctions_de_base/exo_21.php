<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.9 | exo 21

Description :
Modifier la fonction ci-dessus pour qu’elle fonctionne 
peut importe si les caractères sont accentués ou non

Explications :

Commentaires :
Voir les commentaires ci-dessous dans la fonction 
=====================================================================================
*/

function strIsRumyaTwo(string $str) : bool {
    
    //echo mb_detect_encoding($str) . "\n"; // comportement attendu : ASCII mais ça donne UTF-8 !??
    $str = mb_strtolower($str, 'UTF-8');
    //echo mb_detect_encoding($str) . "\n";
    
    //$str2 = 'salut';
    //echo mb_detect_encoding($str2) . "\n"; // comportement attendu ! Donne ASCII !
    $str = ucfirst($str);
    if (strcmp($str, 'Rumyaé') === 0) // pour vérifier que les accents fonctionnent correctements
        return true;
    return false;
}


//var_dump(strIsRumyaTwo('ruMyaÉ'));
//strIsRumyaTwo('ruMyaÉ');