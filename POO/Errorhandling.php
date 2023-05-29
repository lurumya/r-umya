<?php
/*
=====================================================================================
Page | numéro de l'exercice :

Description :

Explications :

Commentaires :
"global" permet à une variable dans une méthode/fonction d'y avoir accès en dehors de celle-ci.
Je pense qu'il faudrait que j'ai un fichier de config et activer "register_argc_argv" afin
d'avoir accès à $argv partout (si j'ai bien compris).
======================================================================================
*/

class Errorhandling {
    public $i;
    public $argNbr;

    public static function errorArgc() : void {
        global $argc;
        if ($argc !== 1) {
            echo 'Wrong number of file arguments !' . "\n";
            exit (255);
        }
    }

//======================================================================================

    // Je comprends pas comment faire ça... Le problème que je crois voir
    // et que $i s'applique sur la méthode errorParamNbr et non sur la 
    // fonction qui utilise cette méthode.
    public static function errorParamNbr(int $argNbr) : int {
        $i = func_num_args();
        echo $i . "\n";
        echo $argNbr . "\n";
        if ($i !== $argNbr) {
            echo 'Wrong parameters number !' . "\n";
            exit (255);
        }
        return 0;
    }

//======================================================================================


    public static function errorEmptyArg($arg) : void {
        if ($arg === '' || $arg === []) {
            echo 'Empty parameters !' . "\n";
            exit(255);
        }
    }

    public static function errorEmptyTwoArg($arg1, $arg2) : void {
        if (($arg1 === '' || $arg1 === []) ||  ($arg2 === '' || $arg2 === [])) {
            echo 'Empty parameters !' . "\n";
            exit(255);
        }
    }

//======================================================================================

    public static function errorTypeOneArgInt($arg) : void {
        if (is_int($arg) === false) {
            echo 'Type not respected in function parameters !' . "\n";
            exit(255);
        }
    }

    public static function errorTypeArgInt($arg1, $arg2) : void {
        if (is_int($arg1) === false || is_int($arg2) === false) {
            echo 'Type not respected in function parameters !' . "\n";
            exit(255);
        }
    }

    public static function errorTypeArgStr($arg) : void {
        if (is_string($arg) === false) {
            echo 'Type not respected in function parameters !' . "\n";
            exit(255);
        }
    }

    public static function errorTypeArgTabInt($array = []) : void {
        if (is_array($array) === false) {
            echo 'Type not respected in function parameters !' . "\n";
            exit(255);
        }
        foreach ($array as $item) {
            if (is_int($item) === false) {
                echo 'Type not respected in function parameters !' . "\n";
                exit(255);
            }
        }
    }

    public static function errorTypeArgTabStr($array = []) : void {
        if (is_array($array) === false) {
            echo 'Type not respected in function parameters !' . "\n";
            exit(255);
        }
        foreach ($array as $item) {
            if (is_string($item) === false) {
                echo 'Type not respected in function parameters !' . "\n";
                exit(255);
            }
        }
    }
}

