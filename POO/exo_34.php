<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.14 | exo 34

Description :
Ré écrire ce code en évitant de dupliquer du code. Penser que d’autres animaux qui nagent peuvent
être ajoutés

class Chat {
    public function marcher(){
        $steps = 0;
        while (true) {
            $steps++;
        }
    }
}
class Canard {
    public function marcher(){
        $steps = 0;
        while (true) {
            $steps++;
        }
    }
    public function nager(){
        $laps = 0;
        while (true) {
            $laps++;
        }
    } 
}

Commentaires :
Pas optimal, je répète deux fois move(). Le problème que je vois ici
c'est que je pourrais rendre ce code plus court sans me répéter 
mais ça déformerait un peu "la propreté" et la logique de la POO et
de l'exercice surtout. Par exemple, je supprimerais toutes les classes 
étendus, je créerais un objet et ensuite j'appliquerais directement
les méthodes utils.
Malgré tout, il faut que je trouve une meilleure manière de résoudre 
ce problème de move() ds cet exo.
=====================================================================================
*/

class Animal {

}

class Movement extends Animal { 
    public function marcher() {
        $steps = 0;
        //echo "marcher\n";
        while (true) {
            $steps++;
        }
        return $this;
    }

    public function nager() {
        $laps = 0;
        //echo "nager\n";
        while (true) {
            $laps++;
        }
        return $this;
    }
    public function voler() {
        $i = 0;
        //echo "voler\n";
        while (true) {
            $i++;
        }
        return $this;
    }
}

class Felin extends Movement {
    public function move() {
        return $this->marcher();
    } 
}

class Anseriforme extends Movement {
    public function move() {
        return $this->marcher()->nager()->voler();
    }
}


$chat = new Felin();
$chat->move();
$canard = new Anseriforme();
$canard->move();