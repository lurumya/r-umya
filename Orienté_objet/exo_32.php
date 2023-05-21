<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.13 | exo 32

Description :
Un contact peut disposer d’un meilleur ami, un meilleur ami est un contact également. Si un
contact devient meilleur ami avec quelqu’un alors l’autre contact sera également son meilleur ami. Par
la méthode whoIsYouBf() il devra nous dire qui est son meilleur ami.

Explications :

Commentaires :

=====================================================================================
*/

class Contact {
    public $someone;
    public $bestFriend;

    public function __construct($someone) {
        $this->someone = $someone;
    }

    public function whoIsYourBf($someone, $bestFriend) {

    }
}

$contact = new Contact("Angelo\n"); // rien capté !!!
