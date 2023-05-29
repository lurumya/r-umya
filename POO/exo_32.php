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
clairement j'ai pas bien compris et je n'arrive pas à bien comprendre et articuler
les différentes instances entre elles (si c'est le bon mot).
=====================================================================================
*/

/**
 * Mes remarques :
 * analysons la phrase : "Un contact peut disposer d’un meilleur ami, un meilleur ami est un contact également"
 * Ce que tu as fait dans le code est différent, tu m'a dit qu'un contact dispose du nom d'un meilleur ami.
 *
 * En objet il est possible de dire qu'un objet dispose d'un lien vers un autre objet, ainsi ce n'est plus le besfriendName qu'il faut sauvegarder, mais bien le bestFriend en lui même.
 * Pour plus de clareté je t'invite à mettre le type des attributs dans la classe objet, par exemple :
 *
 * class Contact {

    private string $contactName;
    private string $bestFriendName;
    private static int $objectNbr = 0;
 * }
 *
 */
class Contact {

    private $contactName;
    private $bestFriendName;
    private static $objectNbr = 0;

    public function __construct($contactName) {
        $this->contactName = $contactName;
        self::$objectNbr++;
    }

    public function setBestFriend(Contact $bestFriendName) : void {
        if (self::$objectNbr === 2) {
            $this->bestFriendName = $bestFriendName;
        }
    }

    public function whoIsYouBf() : void {
        if ($this->bestFriendName) {
            echo "My best friend is " . $this->bestFriendName->contactName . "\n";
        }
    }
}

$contact = new Contact('Angelo');
$friend = new Contact('Donald');
$contact->setBestFriend($friend);
$friend->setBestFriend($contact);

$contact->whoIsYouBf();
$friend->whoIsYouBf();


/*
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
*/