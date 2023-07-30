<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// creation d'une collection de routes
// on va définir tous les chemins autorisés de notre site
$routes = new RouteCollection();

// Ajout d'une nouvelle route 
//* HOME
$route = new Route('/', [
                            '_controller' => App\Controllers\HomeController::class,
                            '_method' => 'index'
                        ],
                        [],
                        [],
                        '',
                        [],
                        'GET');
// puis je l'ajoute à ma collection de route qui est stockée dans $routes
// j'en profite pour lui donner un petit nom unique
$routes->add('home', $route);


//* Fiche Produit
$route = new Route('/product/{id}',
                    [
                    '_controller' => App\Controllers\ProductController::class,
                    '_method' => 'show'],
                    );
$routes->add('product', $route);


//* Liste de tous les jeux
$route = new Route('/games', [
    '_controller' => 'App\Controllers\ProductController',
    '_method' => 'all'
]);
$routes->add('games', $route);

//* ajout d'une route : Page qui affiche toutes les catégories et produits associés
$route = new Route('/categories', [
    '_controller' => App\Controllers\CategoryController::class,
    '_method' => 'all'
]);
$routes->add('categories', $route);

//* ajout d'une route : Page qui affiche tous les éditeurs et produits associés
$route = new Route('/editors', [
    '_controller' => App\Controllers\EditorController::class,
    '_method' => 'all'
]);
$routes->add('editors', $route);

//* ajout d'une route : Page d'information du produit
$route = new Route('/category/{id}', [
    '_controller' => App\Controllers\CategoryController::class,
    '_method' => 'detail'
]);
$routes->add('category_detail', $route);

//* ajout d'une route : Page d'information du produit
$route = new Route('/editor/{id}', [
    '_controller' => App\Controllers\EditorController::class,
    '_method' => 'detail'
]);
$routes->add('editor_detail', $route);

//* ajout d'une route : Affichage des produits par année
$route = new Route('/games/order-by/year', [
    '_controller' => App\Controllers\ProductController::class, 
    '_method' => 'gamesOrderByYear'
]);
$routes->add('games-orderby-year', $route);

//* ajout d'une route : action du formulaire de recherche
$route = new Route('/search', [
    '_controller' => App\Controllers\ProductController::class, 
    '_method' => 'search'
]);
$routes->add('games-search', $route);

//d($routes);