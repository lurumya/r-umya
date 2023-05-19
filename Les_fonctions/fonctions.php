<?php

#public function functionName() : int {
#    return "3.14";
#}

function functionName1() : int {
    return "3.14";
}

function functionName2() : ?float {
    return null;
}

function functionName3() : float {
    return "3.14";
}

function functionName4() : float {
    return (float)"3.14";
}

#function functionName5() : void {
#    return null;
#}

#function functionName6() : ?void {
#    return null;
#}

# Ecrire une fonction qui prendra 2 arguments de type entiers
# et qui renverra le résulat la division de ces arguments : 

function functionName7($arg1, $arg2) : int {
    return (arg1 / arg2);
}

# Ecrire une fonction qui prendra 2 arguments et qui renverra
# le plus petit des 2 : 
function functionName8($arg1, $arg2) : int {
    if (arg1 < arg2) {
        return (arg1);
    }
    else if (arg1 > arg2) {
        return (arg2);
    }
    else {
        echo "Egalité ou autre erreur !";
        exit (1);
    }
}

# Ecrire une fonction qui prend en argument une string (country) et qui retourne
# la capitale de celui-ci, elle doit marcher pour la France, la Suisse, l'Allemagne
# et l'Italie, sinon elle doit retourner "Inconnu". Il faudra utiliser le switch :
function functionName9($country) : string {
strtolower($country);
    switch ($country) {
        case $country === "france":
            echo("La capitale de la France est Paris !\n");
            break;
        case $country === "suisse":
            echo("La capitale de la Suisse est Berne !\n");
            break;
        case $country === "allemagne":
            echo("La capitale de l'Allemagne est Berlin !\n");
            break;
        case $country === "italie":
            echo("La capitale de l'Italie est Rome !\n");
            break;
        default:
            echo("Pays inconnu\n");
            break;
    }
}

?>