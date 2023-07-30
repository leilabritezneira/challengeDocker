<?php

// Le namespace de tous les controllers de notre appli
namespace App\Controllers;

// comme la classe Category n'est pas dans le même namespace, alors, il faut la chercher
use App\Models\Category;
use App\Models\Editor;
use App\Models\Product;

class HomeController extends CoreController
{

    /**
     * Request_uri = '/'
     *
     * @return void
     */
    public function index($params) {

        $data = [];

        // je veux chercher les données des catégories
        // Je vais utiliser la méthode static findAll() de la classe Category
    
        $data['categories'] = Category::findAll();

        // je fais pareil pour les jeux
        $data['games'] = Product::findAll();
        // je fais pareil pour les éditeurs
        $data['editors'] = Editor::findAll();

        // render() vérifie si le chemin renvoie bien à un fichier
        // puis extrait les données
        // include le template 
        $this->render('/home/index.tpl', $data);
    }


    
}

