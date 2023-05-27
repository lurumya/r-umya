<?php
require_once('../POO/Errorhandling.php');
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
J'ai utilisé 2 fonctions internes de PHP ; si j'ai le temps, je corrigerais ce code pour les enlever
=====================================================================================
*/

function RegisterVisitorsNumber(string $human) : null {
    if (Errorhandling::errorArgc() === -1)
        return null;
    if ($human === "") {
        echo '0C0W0M' . "\n";
        return null;
    }
    if (func_num_args() !== 1) {
        echo 'Wrong parameters number !' . "\n";
        return null;
    }
    $size = strlen($human);
    $i = 0;
    $childNbr = 0;
    $manNbr = 0;
    $womanNbr = 0;
    while ($i < $size) {
        if ($human[$i] === 'C')
            $childNbr++;
        elseif ($human[$i] === 'M')
            $manNbr++; 
        elseif ($human[$i] === 'W')
            $womanNbr++;  
        else {
            echo "Erreur !\nVous ne pouvez qu'utiliser les lettres majuscules C, M ou W et sans espace !\n";
            return null;
        }
        $i++;
    }
    $fusionStrInt = [
        'C' => $childNbr,
        'M' => $manNbr,
        'W' => $womanNbr
    ];
    arsort($fusionStrInt);
    foreach ($fusionStrInt as $visitor => $item) {
        echo $item . $visitor;
    }
    echo "\n";
    return null;
}

//RegisterVisitorsNumber("CCMWWMMMMWWMC");
/*RegisterVisitorsNumber("");
RegisterVisitorsNumber("W");
RegisterVisitorsNumber("C");
RegisterVisitorsNumber("M");
RegisterVisitorsNumber("cM"); 
RegisterVisitorsNumber("MWC");
RegisterVisitorsNumber("MW");
RegisterVisitorsNumber("WC");
RegisterVisitorsNumber("MW");
RegisterVisitorsNumber("MWCCC");
RegisterVisitorsNumber("WMMMC");
//var_dump(RegisterVisitorsNumber("CWWMMMM"));
//var_dump(RegisterVisitorsNumber("MMMCMMWWMM")); // 3C 2M 4W
//var_dump(RegisterVisitorsNumber(""));*/
