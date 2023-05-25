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
    private $name;
    private $bestFriendName;

    public function __construct($name) {
        $this->name = $name;
        $this->bestFriendName = null;
    }

    public function setName($name) : string {
        return $this->name = $name;
    }

    public function getName() : string {
        return $this->name;
    }

    public function displayNameFirstname() : void {
        echo $this->getName() . "\n";
    }

    public function setBestFriend(Contact $friendName) : void {
        $this->bestFriendName = $friendName;
        $friendName->bestFriendName = $this;
    }

    public function whoIsYourBf() : string {
        if ($this->bestFriendName) {
            echo "Mon meilleur ami est " . $this->bestFriendName->name . "\n";
            return $this->bestFriendName->name;
        }   
    }
}

$contact = new Contact("Angelo");
$friend = new Contact("Donald");

$contact->setBestFriend($friend);

$contact->whoIsYourBf();
$friend->whoIsYourBf();

