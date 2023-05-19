<?php

/*Ecrire une fonction qui retourne un tableau de tous les mots 
d’une string qu’on lui a donné en paramètre. 
Exemple : Bonjour Angelo est ce que ca va ?
Doit donner :

Array {
 [0] => Bonjour
 [1] => Angelo
 [2] => Est
 [3] => ce
 [4] => que
 [5] => ca
 [6] => va
 [7] => ?
}
*/

/*$str = "salut";
echo $str[0];
echo $str[1];
echo $str[2];
echo $str[3];
echo $str[4];
echo $str[5];        

echo ft_strlen('salute'); // Affiche la longueur de la chaîne "salut" => problème avec les accents
*/

function ft_addChar($str) : string {
    $i = 0;
    while ($str[$i]) { 
        if ($str[$i] == true) {
            #echo "i = " . $i . "\n";
            $i++;
        }
    }
    $str[$i] = "\0";
    return $str;
}

function ft_strlen($str) : int {
    $i = 0;
    while ($str[$i] !== "\0") // ???
        $i++;
    return $i;
}



function ft_strToArray(...$str) : array {

    $tab = array();
    $i = 0;
    $j = 0;
        
        while ($str[$i][$j] != ' ') {
            $tab[$i][$j] = $str[$i][$j];
            echo $tab[$i][$j] . "\n";
            //echo "$j = " . $j . " | $tab[$i][$j] = " . $tab[$i][$j] . "\n";

            /*if ($tab[$i][$j] == ' ') {
                //$tab[$i][$j] = 'Z';
                //echo $tab[$i][$j] . "\n\n\n";
                echo "NTM !!!" . "\n\n\n";
                exit ;
            }*/
            $j++;
    }

    return $tab;
}

var_dump(ft_strToArray("Bonjour Angelo est ce que ca va ?"));
//ft_strToArray("Bonjour Angelo est ce que ca va ?");


//echo ft_strlen(ft_addChar("Bonjour Angelo Est-ce que ca va ?")); // ???
