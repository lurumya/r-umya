<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.13 | exo 33

Description :
Quelle est la signification de cette syntaxe ?
Quel est l'intéret ?

Explications :
Répondons en deux étapes : d'abord maintenant, selon ma connaissance actuelle, 
et ensuite après avoir m'etre davantage renseigné

1) Renvoie à la notion d'héritage. En effet, un homme et une femme sont des humains, ils partagent
ainsi des caractéristiques communes. Plus précisément, si je suis par exemple un homme, 
je vais pouvoir utiliser les méthodes et les attributs contenus dans la class Humain. Cela permet
de mieux organiser son code et d'éviter de se répéter ; les hommes et les femmes ont par exemple 
les deux un coeur, 2 jambes, etc. Ainsi, on ajoutera des attribus et des méthodes supplémentaires
concernant la spécificité de chacun des deux sexes. Après cette explication est vraiment trop générale !!!
--- PHASE 1 TERMINÉ ---

2) 

Commentaires : 
=====================================================================================
*/

class Humain {

}

class Homme extends Humain {

}

class Femme extends Humain {

}