<?php
/*
$pays_population = array(
    'France' => 67595000,
    'Suède' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
);

$i = 0;
foreach($pays_population as $key => $value) {
    if ($value < 20000000)
        $i++;
}
echo 'Il y a ' . $i . " pays de moins de 20 millions d'habitants dans cette liste." . "\n";

foreach($pays_population as $key => $value) {
    if ($value < 20000000)
        echo $key . " : " . $value . "\n";
}

# Remplir un tableau avec 10 nombres aléatoires différents. Vérfifier ensuite si 
# 42 est présent dans le tableau.

$i = 0;
$j = 0;
while ($i <= 9) {
    #$tab[$i] = rand();
    $tab[$i] = rand(30, 50);
    if ($tab[$i] === 42)
        $j++;
    #echo $i . " = " . $tab[$i] . "\n";
    $i++;
}
# echo $j . "\n";

# A partir de là, on peut utiliser cette valeur. 
# La consigne est de vérifier, non d'afficher. Théoriquement, je suis d'ailleurs
# allé plus loin que ce que demande la consigne.    
**/

# Qu'affichent les echos (ci-dessous) ?
$i = 0;
while ($i < 10) {
    $i++;
}
echo $i . "\n";

$i = 0;
do {
    $i++;
} while ($i < 10);
echo $i . "\n";

$i = 10;
do {
    $i++;
} while ($i < 10);
echo $i . "\n";