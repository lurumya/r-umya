<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.2 et 3 | exo 1 à 6 (partie 1)

Description :
Quelles seront les valeurs affichées ?

Explications :

Commentaires :
Si il y a des erreurs, c'est soit une faute d'inattention (mais je ne pense pas), 
soit la réponse me paraissait tellement évidente que je n'ai pas vérifié
=====================================================================================
*/

# 1)
var_dump(1 + 2); // (int)3 car addition de 2 integer
var_dump('1' + '2'); // (int)3 car addition de 2 integer (je ne comprends pas trop mais il convertit automatiquement en int)
var_dump(1 . 2) ; ; // le "." veut dire concaténation. Donc j'imagine que ça donne : (int)12
var_dump(1.2) ; ; // Ici, il s'agit d'un float donc : (float)1.2
// Les deux exemples précédents se termine par deux fois ";". Peut-etre ça ferait une erreur ou un warning car
// il n'y a rien entre les deux ";". Je précise que le ";" met fin à une instruction.
var_dump('1' . '2'); // Ici, je pense qu'on fait une concaténation de 2 strings, ce qui donne : (string)12
var_dump("3 fruits" + '1 légume' . 'donnent'); // D'abord je peux dire que le contenu à l'intérieur 
// des doubles guillements peut etre interprété (ex : "$str"), alors que les guillemets simples ne le sont pas.
// Exemple : $str = "salut"; '$str' = $str, alors que "$str" = salut. 
// Je ne comprends pas très bien le résultat, à vérifier
var_dump(1/2 + true); // 1/2 = 0.5 (donc float). Le booléen true est un type, mais il correspond aussi à un int
// de valeur 1. Résultat : (float)1.5
var_dump(1/2 + true - "-2"); // (+0.5) + (+1) - ("-2") = 3.5. Résultat : (float)3.5. ++ = + / +- = - / -- = +;
var_dump(1/2 - "-2"); // +0.5 - -2 = 2.5. Résultat : (float)2.5

# 2)
$x = 8 - 6.4; // 1.6
$y = 1.6;
var_dump($x == $y);
// $x et $y valent 1.6. J'ai regardé le résultat est ça donne (bool)false. 
// En effet, 8 - 6.4 ne vaut pas 1.6 mais 8 - 6.4 est égal 1.6, autrement dit, (int)1.6. Néanmoins j'ai pas super compris pk.

# 3) 
// Dans cette partie on fait du casting, c'est-à-dire qu'on force un type à adopter un autre type.
var_dump((bool) ""); // (bool)false. Je sais pas exactement pk mais ça me semble logique, un peu comme si ça existait pas
var_dump((bool) "0"); // (bool)false car l'int 0 correspond au bouléen false
var_dump((bool) 1); // (bool)true
var_dump((bool) -2); // (bool)true
var_dump((bool) "foo"); // (bool)true
var_dump((bool) 2.3e5); // (bool)true
var_dump((bool) array(12)); // (bool)true
var_dump((bool) array()); // (bool)false // meme logique que le premier
var_dump((bool) "false"); // (bool)true

# 4)
var_dump(25/7); // (float)3.57 et des poussières // donc converti automatiquement en float
var_dump((int) (25/7)); // logiquement juste 3. (int)3
var_dump(round(25/7)); // je sais pas. Après vérification, donne (float)4. J'imagine qu'il va au plus proche.
// le reste de la division = 4 (25 - 21) alors que 28 (cad une fois de plus 7), est plus proche (28 - 25 = 3)
// Désolé pour l'explication pas très clair mais ça l'est ds ma tete pour autant que j'ai raison


# 5)
$i = 0;
echo $i++; // post-incrémentation = 0;
$i = 0;
echo ++$i; // pré-incrémentation = 1;

# 6)
$i = 0;
$i .= 1;
echo $i; // concaténation donc $i = $i . $i / $i = 01 donc 01

$i = 0;
$i += 1;
echo $i; // $i = $i + 1 / $i = 0 + 1 donc 1

$i = 0;
$i /= 1; // $i = $i / 1 / $i = 0 / 1 donc 0.5
echo $i;
