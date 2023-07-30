<?php

namespace App\Controllers;

/**
 * Cette classe de type Controller (dans le cadre d'une structure MVC)
 * va regrouper toutes les actions en rapport avec les produits
 */
class ProductController extends CoreController
{
    /**
     * méthode show pour afficher la fiche d'un seul produit
     * Request_uri => /product
     *
     * @param array $params
     * @return void
     */
    public function show($params) {

        // On peut donner le FQCN directement quand on exécute une méthode
        $data['game'] = \App\Models\Product::findById($params['id']);
        $data['controller'] = $this;
        $this->render('/product/show.tpl', $data);
    }

    /**
     * méthode pour afficher la liste de tous les produits
     *
     * @return void
     */
    public function all($params) {

        // On cherche toutes les données de tous les produits
        // on exécute la méthode findAll() du model Product
        $data['games'] = \App\Models\Product::findAll();

        $this->render('/product/all.tpl', $data);
    }


    /**
     * Controller qui gère l'affichage des produits par année
     *
     * @return void
     */
    public function gamesOrderByYear() {

        $data['gamesOrderByYear'] =  \App\Models\Product::findAllByYear();
        // affichage du template
        $this->render('product/games-orderby-year.tpl', $data);
    }

    // Controller qui gère l'affichage des résultats de recherche
    public function search() {
        $search = filter_input(INPUT_POST, 'search');
        $search = htmlspecialchars($search);

        // récupération du produit
        $products = \App\Models\Product::search($search);

        $data = [
            "games" => $products,
            "controller" => $this,
            "search" => $search
        ];

        // affichage du template
        $this->render('product/search.tpl', $data);
    }



    /**
     * Prend une date au format SQL
     * et la renvoie au format jj/mm/aaaa
     *
     * @param string $dateDB
     * @return string
     */
    public static function dateFr($dateDB) {
        $timestamp = strtotime($dateDB);
        return date("d/m/Y", $timestamp);
    }


}