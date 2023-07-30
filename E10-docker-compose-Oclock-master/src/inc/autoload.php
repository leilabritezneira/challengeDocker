<?php

/**
 * Fonction pour inclure les fichiers contenant les classes
 * ? https://www.php.net/manual/fr/function.spl-autoload-register
 * 
 */
spl_autoload_register(function ($className) {
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $filename = dirname(__DIR__) . DIRECTORY_SEPARATOR . $className . '.php';

    if (is_readable($filename)) {
        // ça demande à l'interprêteur PHP de lire le code qui est dans le fichier qui a pour chemin la chaine de caractère stockée dans $filename
        require_once($filename);
        // include()
        // include_once()
        // require()
        //? https://www.php.net/manual/fr/function.require-once.php
    }
});