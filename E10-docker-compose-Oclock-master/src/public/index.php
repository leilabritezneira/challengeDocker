<?php

/**
 * ! ICI est notre FRONTCONTROLLER
 */

//// import de la fonction qui va faire l'autoloading des fichiers qui contiennent la définition de nos classes
//// include '../inc/autoload.php';

// On va chercher l'autoload de composer
require_once  __DIR__ . '/../vendor/autoload.php';

// import du fichier de configuration
//* Ce fichier contient toutes les informations pour que PHP puisse se connecter à notre BDD oPlaystore
include '../config.php';

// Dépendance KINT
// afficher le contenu des variables
require '../kint.phar';

//echo "<h1>Hello oPlaystore</h1>";
//echo "Page consultée : " . $_SERVER['REQUEST_URI'];
// ? https://www.php.net/manual/fr/reserved.variables.server
/* 'REQUEST_URI'
L'URI qui a été fourni pour accéder à cette page. Par exemple : '/index.html'. */

// var_dump() pour ausculter le contenu d'une variable
// var_dump($_SERVER) => je vais voir un immense tableau associatif avec les infos sur le serveur, sur la requête HTTP...



/* 
Le routage
*/

// import des routes
include '../App/Routes/web.php';

// import pour la gestion des routes
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;

// récupération de la requête HTTP courante
$context = new RequestContext();

try {
    // ! On utilise Symfony/Routing
    // donc plus de switch.case

    // on recherche si la requête correspond à l'une de nos routes qui devrait être stockée dans $routes (web.php)
    $matcher = new UrlMatcher($routes, $context);
    $params = $matcher->match($_SERVER['REQUEST_URI']);
    //d($params);

    // Si la l'url de requête correspond à une des routes de notre collection, alors, on va récupérer les informations nécessaires pour instancier notre controller et exécuter la méthode qui correspond

    $controllerName = $params['_controller'];
    $methodName = $params['_method'];
    $controller = new $controllerName();
    $controller->$methodName($params);
    
}
catch (\Exception $e) {
    echo "<pre>";
    echo "Erreur sur le site : " . $e->getMessage() ;
    echo "</pre>";
    exit();
}