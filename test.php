<?php
















/*
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
        if ($human[$i] === 'C')
            $childNbr++;
        elseif ($human[$i] === 'M')
            $manNbr++;
        elseif ($human[$i] === 'W')
            $womanNbr++;
        $i++;
    }

    $child = $childNbr . 'C';
    $man = $manNbr . 'M';
    $woman = $womanNbr . 'W';

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
*/


