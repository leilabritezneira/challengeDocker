<?php

// On dit à php que pour faire fonctionner le script en dessus, on a besoin d'aller chercher la classe DB qui est dans le fichier App/Utils/DB.php
// App\Utils est l'espace de nom dans lequel est rangée la classe DB
// App\Utils\DB est le FQCN : Fully QualiFied Class Name
use App\Utils\DB;

// configuration de l'accès à la base de données
DB::$user = 'oplaystore';
DB::$password = 'oplaystore';
DB::$database = 'oplaystore';
