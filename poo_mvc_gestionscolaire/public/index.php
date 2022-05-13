<?php

use App\Models\RP;
use App\Models\Etudiant;
//frontcontroller
//url localhost:8000

//Chargemment Manual
//require_once("../models/User.php");

/*user=new user();
$user->setId(1);
$user->setLogin("douve@gmail.com");
$user->setPassword("douvewane");

*/
//Autloading=>Chargement automatique
//Namespace => Package: ensembe de classe du même domaine
//Namespace repertoire virtuel utiliser pour ranger nos clases
//namespace Models=>ranger mes classes Models
//namespace Core(configuration,Toutes les classes reutilisables)
//namespace Controllers=>ranger mes classes controllers
//Dossier Core =>tous les fichiers qui ne changent pas et réutilisables
//Composer=>Gestionnaires de Dépendances pour php
//Dépendance=>dossier Core est une dépendance(classes réutilisables)
//Hub de dependance=>site beaucoup de dependance suivant le langage
// une méthode abstraite se trouve forcement dans une classe abstraite
//Dans une classe abstraite on peut avoir de méthodes abstraites ou concètes
//Si une classe abstraite ne contient de que des méthodes abstraites il faut la traduire en interface

$rp=new RP();
$etudiant=new Etudiant();
