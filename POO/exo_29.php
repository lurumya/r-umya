<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.12 | exo 29

Description :
Ecrire une classe Contact qui dira « Je suis là » dès qu’on créera un nouveau contact.

Explications :

Commentaires :
La consigne dit "dira" et non "affichera".
=====================================================================================
*/

class Contact {
    private $isThere;

    public function __construct() {
        //$this->isThere = 'Je suis là' . "\n";
        //echo 'Je suis là' . "\n";
        echo $this->isThere = 'Je suis là' . "\n";
    }
}

//$contact = new Contact();
//var_dump($contact = new Contact());
