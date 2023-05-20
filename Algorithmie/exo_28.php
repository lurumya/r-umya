<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.11 | exo 28

Description :
Un directeur engage un membre du personnel pour tenir un registre du nombre d'hommes, de femmes et d'enfants qui visitent 
le musée quotidiennement. Le personnel notera W si des femmes visitent, M pour les hommes et C pour les enfants. 
Ecrire une fonction qui prend la chaîne qui représente les visites et imprime le nombre d'hommes, de femmes et d'enfants. 
Le séquençage doit être en ordre décroissant.
Exemple:
WWMMWWCCC
Production attendue:
4W3C2M

Explications :

Commentaires :
- Voir les égalités et enlever ce hardcode de merde !!!! + voir strlen
- require_once '/home/wolfgang/rumya-exos/Fonctions_de_base/fonctions_de_base_2.php';
=====================================================================================
*/

function RegisterVisitorsNumber(string $human) : null {
    if ($human === "") {
        echo "Vous n'avez pas encore de visite !\n";
        return null;
    }
    $size = strlen($human);
    $i = 0;
    $childNbr = 0;
    $manNbr = 0;
    $womanNbr = 0;
    while ($i < $size) {
        if ($human[$i] !== "C" && $human[$i] !== "M" && $human[$i] !== "W") {
            echo "Erreur !\nVous ne pouvez qu'utiliser les lettres majuscules C, M ou W et sans espace !\n";
            return null;
        }
        if ($human[$i] === "C")
            $childNbr++;
        elseif ($human[$i] === "M")
            $manNbr++;
        elseif ($human[$i] === "W")
            $womanNbr++;
        $i++;
    }

    $child = $childNbr . "C";
    $man = $manNbr . "M";
    $woman = $womanNbr . "W";

    if ($womanNbr < $childNbr && $womanNbr > $manNbr)
        $finalStr = $child . $man . $woman;
    elseif ($manNbr < $childNbr && $manNbr > $womanNbr)
        $finalStr = $child . $man . $woman;
    elseif ($childNbr < $womanNbr && $childNbr > $manNbr)
        $finalStr = $woman . $child . $man;
    elseif ($manNbr < $womanNbr && $manNbr > $childNbr)
        $finalStr = $woman . $man . $child;
    elseif ($childNbr < $manNbr && $childNbr > $womanNbr)
        $finalStr = $man . $child . $woman;
    elseif ($womanNbr < $manNbr && $womanNbr > $childNbr)
        $finalStr = $man . $woman . $child;

    echo $finalStr . "\n";
    return null;
}

RegisterVisitorsNumber("");
//var_dump(RegisterVisitorsNumber("MMMCMMWWMM")); // 3C 2M 4W
//var_dump(RegisterVisitorsNumber(""));
