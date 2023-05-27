<?php
/*
=====================================================================================
Page | numéro de l'exercice :

Description :

Explications :

Commentaires :

=====================================================================================
*/

class Errorhandling {
    public $i;
    public $argNbr;

    public static function errorArgc() : int {
        global $argc;
        if ($argc !== 1) {
            echo 'Wrong number of arguments !' . "\n";
            return -1;
        }
        return 0;
    }
    /*
    public static function errorParamNbr(int $argNbr) : int {
        $i = func_num_args();
        echo $i . "\n";
        echo $argNbr . "\n";
        if ($i !== $argNbr) {
            echo 'Wrong parameters number !' . "\n";
            return -1;
        }
        return 0;
    }*/

}

