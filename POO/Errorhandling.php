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

    public static function errorArgc() : int {
        global $argc;
        if ($argc !== 1) {
            echo 'Wrong number of file arguments !' . "\n";
            exit (255);
        }
        return 0;
    }

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


    public static function errorTypeArgInt($arg1, $arg2) : int {
        if (is_int($arg1) === false || is_int($arg2) === false) {
            echo 'Type not respected in function parameters !' . "\n";
            exit(255);
        }
        return 0;
    }

    public static function errorTypeArgStr($arg) : int {
        if (is_string($arg) === false) {
            echo 'Type not respected in function parameters !' . "\n";
            exit(-1);
        }
        return 0;
    }

    public static function errorEmptyArg($arg) : int {
        if ($arg === '') {
            echo 'Empty parameters !' . "\n";
            exit(255);
        }
        return 0;
    }
}

