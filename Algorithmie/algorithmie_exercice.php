<?php

//require_once '/home/wolfgang/rumya-exos/Fonctions_de_base/fonctions_de_base_2.php';

// Un directeur engage un membre du personnel pour tenir un registre du nombre d'hommes, de
// femmes et d'enfants qui visitent le musée quotidiennement. Le personnel notera W si des femmes
// visitent, M pour les hommes et C pour les enfants. Ecrire une fonction qui prend la chaîne qui
// représente les visites et imprime le nombre d'hommes, de femmes et d'enfants. Le séquençage doit
// être en ordre décroissant.

// Exemple:
// WWMMWWCCC
// Production attendue:
// 4W3C2M
/*
function ft_strlen($str) : int {
    $i = 0;
    while ($str[$i] !== "\0") // ???
        $i++;
    return $i;
}
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
            echo "Erreur !\nVous ne pouvez qu'utiliser les lettre majuscules C, M ou W et sans espace !\n";
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

    if ($childNbr > $manNbr && $childNbr > $womanmanNbr)


    echo "child = " . $childNbr . " | man = " . $manNbr . " | woman = " . $womanNbr . "\n";
    echo $woman . "W" . $child . "C" . $man . "M\n";
}

//RegisterVisitorsNumber("Z");
var_dump(RegisterVisitorsNumber("WCWWCWMCM"));
//var_dump(RegisterVisitorsNumber(""));