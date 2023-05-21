<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.17 | exo 38

Description : considérons ces tables
1) Que va donner : SELECT id, prenom, nom FROM lpecom_realisateurs WHERE nation = "us" AND sexe = 1; ?
2) Que va donner : SELECT * FROM lpecom_realisateurs WHERE sexe = "0" ORDER BY nom DESC LIMIT 1;
3) Que va donner : SELECT f.nom, r.prenom AS realisateur_prenom, r.nom AS realisateur_nom, AVG(fn.note) AS moyenne_note FROM lpecom_films f INNER JOIN lpecom_realisateurs r ON f.id_realisateur = r.id INNER JOIN lpecom_films_notes fn ON f.id = fn.id_film WHERE f.id = 546;

Explications :

Commentaires :
=====================================================================================
*/

