<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.14 | exo 34

Description :
Ré écrire ce code en évitant de dupliquer du code. Penser que d’autres animaux qui nagent peuvent
être ajoutés


Explications :

Commentaires :

=====================================================================================
*/

/*
---- Code à réécrire ! ----

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
*/

class Animals {
   
    protected function marcher(){
        $steps = 0;
        while (true) {
            $steps++;
        }
    }

    protected function nager(){
        $laps = 0;
        while (true) {
            $laps++;
        }
    } 
}

class Chat extends Animals {
    public function move() {
        $this->marcher();
    }
}

class Canard extends Animals {
    public function move() {
        $this->marcher();
        $this->nager();
    }
}

// C'est foireux comment j'ai fait ça !!!