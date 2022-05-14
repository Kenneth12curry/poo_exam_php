<?php
namespace App\Exceptions;
class BdConnexionException extends \PDOException{
    public $message="Erreur connexion-veuillez contacter votre Admin";
}