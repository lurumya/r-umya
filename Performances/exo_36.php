<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.15 | exo 36

Description :
Le but de du code ci-dessous est de compter le nombre de contact qui ont le même nom de famille.
- Combien de temps mettra-t-il a s’exécuter ?
- De quel facteur la durée augmentera si on augmente par 2 le nombres d’idsContacts ?
- Estimer la durée pour 1'000'000 d’idContact à comparer.
- Donner une alternative qui permettrait d’avoir le résultat avec d’avoir une prothèse de hanche.

Explications :

Commentaires :

=====================================================================================
*/

$listIdContacts = [1,2,3,4,5,6,7,8,9,10];
foreach($listIdContacts as $idContact){
    $contact = Contact::load(idContact);
    foreach($listIdContacts as $idContact){
        $contact2 = Contact::load(idContact);
        if ($contact->getLastname() == $contact2->getLastname()){
            $nbDuplicates++;
        }
    }
}