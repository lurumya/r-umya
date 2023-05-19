<?php 
// Ecrire une fonction qui renvoie l’inverse d’un tableau donné en paramètre, 
// par exemple si on donne [10,50,34,54] il devra renvoyer [57,34,50,10]

function ftArraySize($tab) : int {
    $i = 0;
    foreach ($tab as $element)
        $i++;
    return $i;
}



function arrayReverseValue($tab) : ?array {
    $checkOdd = ftArraySize($tab);
    $x = ftArraySize($tab);

    if ($checkOdd % 2 != 0) {
        echo "Le tableau contient un nombre impair d'éléments ! Un swap parfait n'est donc pas possible ! \n";
        return null;
    }

    $i = 0;
   while ($x < $i) {
        $swapA = $tab[$i];
       // echo "swapA = " . $swapA . "\n";
        $swapB = $tab[$x - 1];
       // echo "swapB = " . $swapB . "\n";
        $tab[$i] = $swapB;
        $tab[$x - 1] = $swapA;
        $i++;
    }

    
    return $tab;
}

var_dump(arrayReverseValue([10,50,34,54]));
//var_dump(arrayReverseValue([10,50,34,54,7]));