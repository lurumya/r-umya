<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.7 | exo 14

Description :
Comment afficher les pays qui ont moins de 20Mio 
d’habitants à partir de ce tableau ? 
- Afficher d’abord le nombre de pays
- Afficher ensuite les pays sous la forme Pays : Nombre

Explications :

Commentaires :
Je parcours 2 fois mon tableau... Ici ça n'a aucune importance mais avec un tableau beaucoup plus grand,
les performances seraient forcément impactées.

=====================================================================================
*/

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
echo 'Il y a ' . $i . " pays de moins de 20 millions d'habitants dans cette liste.\n";

foreach($pays_population as $key => $value) {
    if ($value < 20000000)
        echo $key . " : " . $value . "\n";
}
