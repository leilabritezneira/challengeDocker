# Namespaces

[les Namespaces ou espace de noms](https://kourou.oclock.io/ressources/fiche-recap/namespaces/)


## Namespace et PSR4

Ce qu'on recherche à faire ? Charger les fichiers source de nos classes sans avoir besoin de faire de require pour chacun d'eux.
Un simple "use" doit permettre de charger seulement la source nécessaire, et pas toutes les sources par défaut.

La solution :

[PSR4 : Autoloader](https://www.php-fig.org/psr/psr-4/)

[PHP spl_autoload_register()](https://www.php.net/manual/fr/function.spl-autoload-register)

## namespace, PSR 4 et Composer

[Doc Composer](https://getcomposer.org/doc/04-schema.md#autoload)