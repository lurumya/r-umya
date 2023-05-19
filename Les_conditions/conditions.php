<?php

$i = 4;
if ($i = 4) {
    echo 'Yes!';
}
echo("\n");

$i = 4;
if ($i == 4) {
    echo 'Yes!';
}
echo("\n");

$i = 4;
if ($i === 4) {
    echo 'Yes!';
}
echo("\n");

$i = '4';
if ($i == 4) {
    echo 'Yes!';
}
echo("\n");

$i = 4;
if ($i === 4) {
    echo 'Yes!';
}
echo("\n");

# Ecrire une condition qui écrit 'A' si une valeur est 
# inférieure à 20, 'B' si la valeur est comprise entre
# 20 et 30, 'C' si elle est comprise entre 30 et 100, 
#'D' si elle est supérieure à 100 : 

$x = 101; # A modifier manuellement
if (is_int($x) == false) {
    echo("Write a integer please !");
}
else if ($x < 20) {
    echo 'A';
}
else if ($x >= 20 && $x <= 30) {
    echo 'B';
}
else if ($x >= 30 && $x <= 100) {
    echo 'C';
}
else {
    echo 'D';
}
echo("\n");

?>