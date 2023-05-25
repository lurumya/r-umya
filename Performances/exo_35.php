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

$listIdContact = [1,2,3,4,5,6,7,8,9,10];
    foreach ($listIdContact as $idContact) {
        $contact = Contact::load($idContact);
        echo 'Bonjour, '.$contact->getDesignation();
    }

1) Combien de temps mettra-t-il à s’exécuter ?
2) Est-ce améliorable ? si oui comment ?

Commentaires :
Avant de répondre, je précise que je n'ai jamais travailler avec une base de données,
donc mes réponses vont etre conceptuelles et basées sur la logique.
=====================================================================================
*/


/*
- Question 1) : Combien de temps mettra-t-il à s’exécuter ?
10 secondes car 10 itérations. Dans chaque itération, nous mettons "Contact::load($idContact)"
dans la variable $contact. La méthode load($idContact) charge l’objet avec $idContact depuis la base de données.
Le point important est que cette méthode charge Un seul objet. Tous les objets sont chargés grace au foreach.
A présent, la donnée de l'exercice nous explique que nous avons la possibilité de d'utiliser une méthode qui
charge tous les objets avec ces identifiants depuis la base de données... Passons maintenat la question 2.

Question 2) : Est-ce améliorable ? si oui comment ?
Oui c'est améliorable ! Comment ? En chargeant tous les objets d'un seul coup grace à la méthode loadAll(array $listIds),
ce qui donne :

$listIdContact = [1,2,3,4,5,6,7,8,9,10];
$contacts = Contact::loadAll(array $listIds)
foreach ($contacts as $item) {
    echo 'Bonjour, '. $item->getDesignation();
}

On peut constater que cette fois-ci le chargement ce fait en une seule 
requete. En effet, la variable $contacts n'est pas dans un foreach cette fois.
*/