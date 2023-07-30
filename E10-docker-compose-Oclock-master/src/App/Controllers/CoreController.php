<?php

namespace App\Controllers;

use League\Plates\Engine;
use App\Utils\Logger;

/**
 * Nous allons grouper dans CoreController 
 * toutes les méthodes communes à nos controllers
 */
abstract class CoreController
{
    /**
     * Intègre des données à un template HTML
     * protected : pour être utilisable par les enfants
     *
     * @param string $template chemin du fichier template
     * @param array $data les données à intégrer dans le template
     * @return void
     */
    protected function render(string $template, array $data=[]) {

        $data['categories'] = \App\Models\Category::findAll();
        $data['editors'] = \App\Models\Editor::findAll();

        // initialisation du moteur de template en indiquant 
        // le dossier qui contiendra les templates
        $templates = new Engine(dirname(dirname(__DIR__)) . "/views");
        
        // exécution du moteur de rendu
        echo $templates->render($template, $data);
   }
}