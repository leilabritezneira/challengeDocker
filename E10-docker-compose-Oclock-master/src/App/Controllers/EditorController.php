<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Editor;

class EditorController extends CoreController
{
   /**
     * Controller qui gère l'affichage de tous les éditeurs et produits associés
     *
     * @return void
     */
    public function all($params) {
        $data = [];

        // charge la liste des editeurs
        $data["editors"] = Editor::findAll();

        // charge la liste des jeux
        $data['games'] = Product::findAll();

        // affichage du template
        $this->render('editor/all.tpl', $data);
    }

    // Controller qui gère l'affichage de tous les produits d'un éditeur
    public function detail($params) {
        $data = [];

        // récupération de la catégorie
        $data['editor'] = Editor::findById($params['id']);

        // récupération des produits de la catégorie
        $data['games'] = Product::productsByEditor($params['id']);

        // affichage du template
        $this->render('editor/detail.tpl', $data);
    }
}