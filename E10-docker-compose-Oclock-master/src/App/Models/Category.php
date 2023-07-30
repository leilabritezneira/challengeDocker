<?php

namespace App\Models;

use App\Utils\DB;
use App\Utils\President;

/**
 * Classe Modèle qui va communiquer avec la table categories de notre BDD
 */
class Category extends CoreModel
{
    public $name;

    static public function findById(int $id) {
        // on récupère notre connexion PDO
        $pdoDBConnexion = DB::getPdo();
        

        // requête SQL pour récupérer toutes les lignes de notre table
        $sql = "SELECT * FROM `categories` WHERE id = " . $id ;

        // exécuter notre requete SQL
        $pdoStatement = $pdoDBConnexion->query($sql);

        // lire et renvoyer tous les résultats sous forme d'objet Category
        $pdoStatement->setFetchMode(\PDO::FETCH_CLASS, self::class);
        return $pdoStatement->fetch();
    }

    /**
     * renvoie toutes les catégories stockées en BDD
     *
     * @return 
     */
    static public function findAll() {
        // on récupère notre connexion PDO
        $pdoDBConnexion = DB::getPdo();

        /* $president = President::getInstance();
        d($president);
        $president->sayHisName(); */
        
        // requête SQL pour récupérer toutes les lignes de notre table
        $sql = "SELECT * FROM `categories` ORDER BY `name`" ;

        // exécuter notre requete SQL
        // on récupère un objet de type PDOStatement
        $pdoStatement = $pdoDBConnexion->query($sql);

        // lire et renvoyer tous les résultats sous forme de tableau d'objets de type Category
        // self::class => App\Models\Category 
        return $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

    public function save() {
        //todo
    }
}