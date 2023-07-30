<?php

namespace App\Models;

use App\Utils\DB;

/**
 * Classe Modèle qui va communiquer avec la table products de notre BDD
 * Cette classe hérite des propriétés et des méthodes de App\Models\Coremodel
 */
class Product extends CoreModel
{
    //! hérité de CoreModel
    /* public $id */

    public $id_category; // clé étrangère: 1 produit appartient à 1 catégorie
    public $category_name;
    public $id_editor; // clé étrangère : 1 produit appartient à 1 éditeur
    public $editor_name;
    public $title;
    public $description;
    public $price;
    public $date_release;
    public $minimum_age;

    //! hérité de CoreModel
    /* public function setId($id) {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    } */

    // ! à cause de l'héritage, Product doit obligatoirement implémenter ces trois méthodes : 
    static public function findById(int $id) {
        // on récupère notre connexion PDO
        $pdoDBConnexion = DB::getPdo();

        // requête SQL pour récupérer toutes les lignes de notre table
        $sql = "SELECT 
            products.*, 
            categories.name AS category_name, 
            editors.name AS editor_name 
        FROM `products` 
        LEFT JOIN categories ON categories.id = products.id_category
        LEFT JOIN editors ON editors.id = products.id_editor
        WHERE products.id = " . $id ;

        // exécuter notre requete SQL
        $pdoStatement = $pdoDBConnexion->query($sql);

        // lire et renvoyer tous les résultats sous forme d'objet Product
        // self::class => App\Models\Product
        $pdoStatement->setFetchMode(\PDO::FETCH_CLASS, self::class);
        //? https://www.php.net/manual/fr/class.pdostatement.php
        return $pdoStatement->fetch();
    }

    static public function findAll() {
        // on récupère notre connexion PDO
        $pdoDBConnexion = DB::getPdo();
        
        // requête SQL pour récupérer toutes les lignes de notre table
        $sql = "SELECT 
            products.*, 
            categories.name AS category_name, 
            editors.name AS editor_name 
        FROM `products` 
        LEFT JOIN categories ON categories.id = products.id_category
        LEFT JOIN editors ON editors.id = products.id_editor
        ORDER BY `title`" ;

        // exécuter notre requete SQL
        $pdoStatement = $pdoDBConnexion->query($sql);

        // lire et renvoyer tous les résultats sous forme de tableau d'objet
        return $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

    /**
     * Récupère tous les produits appartenant à une catégorie dont l'id est transmis
     *
     * @param $id_category
     * 
     */
    static public function productsByCategory($id_category) {
        // on récupérer notre connexion PDO
        $pdoDBConnexion = DB::getPdo();
        
        // requête SQL pour récupérer toutes les lignes de notre table
        $sql = "SELECT 
            products.*, 
            categories.name AS category_name, 
            editors.name AS editor_name 
        FROM `products` 
        LEFT JOIN categories ON categories.id = products.id_category
        LEFT JOIN editors ON editors.id = products.id_editor
        WHERE id_category = {$id_category}
        ORDER BY `title`
        " ;

        // exécuter notre requete SQL
        $pdoStatement = $pdoDBConnexion->query($sql);

        // lire tous les résultats
        return $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

    /**
     * Récupère tous les produits appartenant à un éditeur dont l'id est transmis
     *
     * @param $id_editor
     */
    static public function productsByEditor($id_editor) {
        // on récupérer notre connexion PDO
        $pdoDBConnexion = DB::getPdo();
        
        // requête SQL pour récupérer toutes les lignes de notre table
        $sql = "SELECT 
            products.*, 
            categories.name AS category_name, 
            editors.name AS editor_name 
        FROM `products` 
        LEFT JOIN categories ON categories.id = products.id_category
        LEFT JOIN editors ON editors.id = products.id_editor
        WHERE id_editor = {$id_editor}
        ORDER BY `title`
        " ;

        // exécuter notre requete SQL
        $pdoStatement = $pdoDBConnexion->query($sql);

        // lire tous les résultats
        return $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

    static public function findAllByYear() {

        // on récupérer notre connexion PDO
        $pdoDBConnexion = DB::getPdo();

        // requête SQL pour récupérer toutes les lignes de notre table
        $sql = "SELECT 
            products.*, 
            YEAR(products.date_release) AS year,
            categories.name AS category_name, 
            editors.name AS editor_name 
        FROM `products` 
        LEFT JOIN categories ON categories.id = products.id_category
        LEFT JOIN editors ON editors.id = products.id_editor
        ORDER BY YEAR(date_release) DESC, `title`" ;

        // exécuter notre requete SQL
        $pdoStatement = $pdoDBConnexion->query($sql);

        // lit tous les résultats
        $games = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        // tableau qui stockera tous les jeux par année
        $gamesByYear = [];

        // répartie les jeux par années
        foreach ($games as $game) {
            // si la clé avec l'année n'existe pas, 
            // on la déclare avec un tableau vide pour y ajouter les jeux
            if (!isset($gamesByYear[$game->year])) {
                $gamesByYear[$game->year] = [];
            }

            // Ajout du jeu dans l'année (année de sortie)
            $gamesByYear[$game->year][] = $game;
        }

        return $gamesByYear;
    }

    static public function search($search) {
        // on récupérer notre connexion PDO
        $pdoDBConnexion = DB::getPdo();


        // requête SQL pour récupérer toutes les lignes de notre table
        $sql = "SELECT 
            products.*, 
            categories.name AS category_name, 
            editors.name AS editor_name 
        FROM `products` 
        LEFT JOIN categories ON categories.id = products.id_category
        LEFT JOIN editors ON editors.id = products.id_editor
        WHERE title like :search OR categories.name like :search OR editors.name like :search
        ORDER BY `title`
        " ;

        // préparation de la requête
        $pdoStatement = $pdoDBConnexion->prepare($sql);
        $pdoStatement->execute([":search" => "%" . $search . "%"]);

        // lire tous les résultats
        return $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

    public function save() {
        //todo
    }
}