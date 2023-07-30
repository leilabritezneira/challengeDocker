<?php
// App\Utils est l'espace de nom dans lequel est rangée la classe DB
namespace App\Utils;


/**
 * ! Le but de DB est de fournir une instance de PDO
 * ! Et d'éviter qu'il puisse être créé plusieurs instances de PDO
 * ? Et si un développeur tout nouveau instancie PDO directement dans les Models ?
 * - et ben, c'est foutu ! il va falloir reprendre avec lui son code
 * 
 * * Utilisation pour récupérer l'instance de PDO:
 * 
 * DB::getPDO()
 */
class DB
{
    static private $pdoDBConnexion;
    static public $user;
    static public $password;
    static public $database;

    /**
     * Empêche la création externe d'instances.
     */
    private function __construct () {}

    /**
     * Empêche la copie externe de l'instance.
     */
    private function __clone () {}



    // Ouvre une connexion à notre base de données
    // et retourne notre objet PDO
    static public function getPdo() {

        // Retourner la connexion si elle a déjà été ouverte
        // Si elle existe déjà il n'y aura pas d'ouverture d'une nouvelle connexion pdo à la bdd
        // et donc on renvoie la connexiion existante d'où le RETURN
        // c'est mieux pour les performances, notamment en cas de requêtes simultanées de nombreux utilisateurs
        // self fait référence à la classe équivalent dans ce cas à DB 
        if (self::$pdoDBConnexion) {
            return self::$pdoDBConnexion;
        }


        // DSN
        $dataSourceName = "mysql:dbname=" . self::$database . ";host=db;charset=UTF8";

        // nom d'utilisateur qui a accès à la BDD
        $user = self::$user;

        // mot de passe de l'utilisateur qui a accès à la BDD
        $password = self::$password;


        try {
            // PHP tente de créer une connexion avec la BDD
            //? https://www.php.net/manual/fr/class.pdo.php
            self::$pdoDBConnexion = new \PDO(
                $dataSourceName, 
                $user, 
                $password,
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING
                    // Pour les tests, PDO::ERRMODE_WARNING permet d'avoir des indices sur les
                    // erreurs qui se produisent lors de l'utilisation de la connexion PDO
                    // et notamment pour l'exécution des requêtes
                    // En production, on aurait mis : PDO::ERRMODE_SILENT car on ne veut pas 
                    // donner accès à tout le monde aux informations disponibles dans les
                    // messages d'erreurs
                    // => pour éviter les risques de sécurité
                ]
            );
        } catch (\PDOException $exception) {
            //? https://www.php.net/manual/fr/class.pdoexception
            // Message affiché s'il y a une erreur lors de la connexion à la base
            echo "Connexion impossible à la base " . $exception->getMessage() ;
            exit();
        }

        // retourne notre objet PDO
        return self::$pdoDBConnexion;
    }
}