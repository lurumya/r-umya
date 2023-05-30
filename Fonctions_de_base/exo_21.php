<?php
require_once('../POO/Errorhandling.php');
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
// pk ?string ?
function strIsRumyaTwo(?string $str = '') : bool {
    Errorhandling::errorArgc();
	$search  = array('À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý','à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í','î','ï','ð','ò','ó','ô','õ','ö','ù','ú','û','ü','ý','ÿ');
	$replace = array('A','A','A','A','A','A','C','E','E','E','E','I','I','I','I','O','O','O','O','O','U','U','U','U','Y','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','o','o','o','o','o','u','u','u','u','y','y');
	$str = str_replace($search, $replace, $str);
    $str = strtolower($str);
    $str = ucfirst($str);
    if (strcmp($str, 'Rumya') === 0)
        return true;
    return false;
}

//var_dump(strIsRumyaTwo('RuMyÀ'));
//var_dump(strIsRumyaTwo(''));
//var_dump(strIsRumyaTwo());

//strIsRumyaTwo('');
//strIsRumyaTwo(5);
//strIsRumyaTwo();
//strIsRumyaTwo('asdf');
//strIsRumyaTwo('RuMya', 6);
//strIsRumyaTwo('RuMya', 'str');
//strIsRumyaTwo([]);

//var_dump(strIsRumyaTwo('ruMyA'));
//strIsRumyaTwo('ruMyaÉ');
//var_dump(strIsRumyaTwo(''));
//var_dump(strIsRumyaTwo('RuMya', 'str'));
//var_dump(strIsRumyaTwo(59));


/**
  * Remarque globale :
 * en général quand on veut s'abstraire des accents le plus simple est de les remplacer
 */
/*
function strIsRumyaTwo($str = '') : bool {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorTypeArgStr($str);
    Errorhandling::errorEmptyArg($str);

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
*/
