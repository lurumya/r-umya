<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.12 | exo 31

Description :
On doit pouvoir en tout temps changer le nom et le prénom d’un contact, et il devra dire « Je
suis là et je suis nom prénom » uniquement si on lui demande via une méthode qui s’appellera
whoAreYou() ;

Explications :

Commentaires :

=====================================================================================
*/

class Contact {
    private $name;
    private $firstname;

    public function __construct($name, $firstname) {
        $this->name = $name;
        $this->firstname = $firstname;
    }
    
    public function setName($name, $firstname) {
        $this->name = $name;
        $this->firstname = $firstname;
    }

    public function whoAreYou() {
        echo "Je suis là et je suis " . $this->name . " " . $this->firstname . "\n";
    }
}
/*
$contact = new Contact("Prospero", "Angelo");
$contact->whoAreYou();
$contact->setName("Anderson", "Pamela");
$contact->whoAreYou();
*/

