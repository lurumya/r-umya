<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.15 | exo 36

Description :

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

Le but de ce code est de compter le nombre de contact qui ont le même nom de famille.

- 1)  Combien de temps mettra-t-il à s’exécuter ?
- 2)  De quel facteur la durée augmentera si on augmente par 2 le nombres d’idsContacts ?
- 3) Estimer la durée pour 1'000'000 d’idContact à comparer.
- 4) Donner une alternative qui permettrait d’avoir le résultat avec d’avoir une prothèse de hanche.

Commentaires :
=====================================================================================
*/

/*
- Question 1)  Combien de temps mettra-t-il à s’exécuter ?
Nous sommes en présence de 2 foreach, le foreach "père" utilisant la méthode load. 
Sous réserve de ce qu'il y a ds le foreach "fils", on peut déjà dire au moins 10 secondes.
Le foreach "fils" fait exactement la meme chose, donc nous pouvons dire que ce code 
mettra 20 secondes à s'exécuter !
Maintenant un peu d'explication : le premier foreach permet de créer un objet. Le 2ème également.
En conséquence nous avons deux objets qui nous permet de les comparer grace au if.
Si l'objet1($contact) est pareil que l'objet2($contact2), alors on incrémente de 1 $nbDuplicates.
Si $nbDuplicates vaut plus que 0, alors il y a au moins une égalité. Par contre, peut-etre il s'agit 
d'une spécificité de php mais $nbDuplicates n'a pas été initialement initialisé à 0.

- Question 2)  De quel facteur la durée augmentera si on augmente par 2 le nombres d’idsContacts ?


- Question 3) Estimer la durée pour 1'000'000 d’idContact à comparer.


- Question 4) Donner une alternative qui permettrait d’avoir le résultat avec d’avoir une prothèse de hanche.



*/