<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.13 | exo 33

Description :
Quelle est la signification de cette syntaxe ?
Quel est l'intéret ?

Explications :
Le mot-clé ici est "extends", qui veut dire étendre à une autre classe. La notion centrale ici est celle d'héritage.
En effet, un homme et une femme sont des humains. Chacun à des ces propres spécificités (le sexe par exemple) 
mais ils ont les deux des caractéristiques communes (un cerveau, 2 jambes, etc).
Autrement dit, la class "Homme" et la class "Femme" héritent des spécificités (attributs, méthodes, etc) 
de la class "mère" "Humain". Je vais donc pouvoir utiliser les méthodes et les attributs contenus dans la class Humain. 
L'intéret est de mieux organiser son code et d'éviter de se répéter. De plus, c'est un paradigme très adapté pour les grands
projets et les grandes équipes. Nous pouvons essayer d'imaginer à quel point il serait compliqué de gérer un projet en 
utilisant par exemple que des fonctions. 

De plus, le paradigme de la POO est plus intuitive que d'autres paradigmes. 
On peut penser par exemple à une class voiture (2 roues, un volant, etc).
=====================================================================================
*/

class Humain {

}

class Homme extends Humain {

}

class Femme extends Humain {

}