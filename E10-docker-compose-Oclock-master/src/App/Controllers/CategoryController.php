<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Utils\President;


class CategoryController extends CoreController
{
    /**
     * gère l'affichage de toutes les catégories et produits associés
     *
     * @return void
     */
    public function all($params) {
        $data = [];

        // charge la liste des catégories
        $data["categories"] = Category::findAll();

        // charge la liste des jeux
        $data['games'] = Product::findAll();
        /*$president = President::getInstance();
        d($president);
        $president->sayHisName();*  */

        // affichage du template
        $this->render('category/all.tpl', $data);
    }

    /**
     * gère l'affichage de tous les produits d'une catégorie
     *
     * @param integer $id
     * @return void
     */
    public function detail($params) {
        $data = [];

        // récupération de la catégorie
        $data['category'] = Category::findById($params['id']);

        // récupération des produits de la catégorie
        $data['games'] = Product::productsByCategory($params['id']);

        // affichage du template
        $this->render('category/detail.tpl', $data);
    }
}