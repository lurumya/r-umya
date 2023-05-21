<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.15 | exo 35

Description :
Pour tous les points ci-dessous, on va présumer que ces méthodes existent :
Contact::load(int $id) -> charge l’objet avec cet identifiant depuis la base de données
Contact::loadAll(array $listIds) -> charge tous les objets avec ces identifiants depuis la base de
données
Nous partons du postulat qu’une requête en base de données prendra 1 seconde, peu importe la
requête.

Considérons le code ci-dessous : 
- Combien de temps mettra-t-il à s’exécuter ?
- Est-ce améliorable ? si oui comment ?

Explications :

Commentaires :

=====================================================================================
*/

$listIdContact = [1,2,3,4,5,6,7,8,9,10];
    foreach ($listIdContact as $idContact) {
        $contact = Contact::load($idContact);
        echo 'Bonjour, '.$contact->getDesignation();
    }
