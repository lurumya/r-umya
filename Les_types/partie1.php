<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.2 et 3 | exo 1 à 6 (partie 1)

Description :

Explications :

Commentaires :

=====================================================================================
*/

# 1)
var_dump(1 + 2);
var_dump('1' + '2');
#var_dump(1 . 2) ; ;
#var_dump(1.2) ; ;
var_dump('1' . '2');
var_dump("3 fruits" + '1 légume' . 'donnent');
var_dump(1/2 + true);
var_dump(1/2 + true - "-2");
var_dump(1/2 - "-2");
echo("\n");

# 2)
$x = 8 - 6.4;
$y = 1.6;
var_dump($x == $y);
echo("\n");

# 3) 
var_dump((bool) "");
var_dump((bool) "0");
var_dump((bool) 1);
var_dump((bool) -2);
var_dump((bool) "foo");
var_dump((bool) 2.3e5);
var_dump((bool) array(12));
var_dump((bool) array());
var_dump((bool) "false");
echo("\n");

# 4)
var_dump(25/7);
var_dump((int) (25/7));
var_dump(round(25/7));
echo("\n");

# 5)
$i = 0;
echo $i++;

$i = 0;
echo ++$i;

echo("\n");
echo("\n");
echo("\n");

# 6)
$i = 0;
$i .= 1;
echo $i;
echo("\n");

$i = 0;
$i += 1;
echo $i;
echo("\n");

$i = 0;
$i /= 1;
echo $i;
echo("\n");
