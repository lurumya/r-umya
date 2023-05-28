<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.12 | exo 30

Description :
Ecrire une classe Contact. Un contact dispose d’un nom et d’un prénom. Quand on un contact
est crée, on devra afficher « Je suis là et je suis nom prénom ».

Explications :

Commentaires :

=====================================================================================
*/

class Contact {
    private $name;
    private $firstname;

    public function __construct($name, $firstname) {
        echo 'Je suis là et je suis ' . $this->name = $name . ' ' . $this->firstname = $firstname . "\n";
    }
}

//$contact = new Contact('Angelo', 'Prospero');