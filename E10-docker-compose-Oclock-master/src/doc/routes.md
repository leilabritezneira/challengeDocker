# Les routes

## qu'est-ce que c'est ?

Une route =>

- 1 chemin (la partie de l'URL débarassée de l'adresse du serveur ou nom de domaine)
- 1 méthode HTTP (GET, POST, PUT...)
- 1 méthode de controller
- 1 nom unique (optionnel)

Par exemple : 

- /product/list
- GET
- ProductController::list()
- product-list

## Lister les routes

Quand on souhaite concevoir un nouveau site, on doit lister les routes qui seront mises à disposition des utilisateurs.

Listons les routes pour notre projet oPlaystore : 

### Home

- /
- HomeController::index()
- GET
  
### Page produit

- /product
- ProductController::show($_GET["id"])
- GET
  
### Liste de tous les produits

- /games
- ProductController::all()
- GET

### Liste des catégories avec les jeux associés

- /categories
- CategoryController::all()
- GET

### Liste des éditeurs avec les jeux associés

- /editors
- EditorsController::all()
- GET

### Liste les produits liés à une catégorie

- /category
- CategoryController::detail($_GET["id"])
- GET

### Liste les produits liés à un éditeur

- /editor
- EditorsController::detail($_GET["id"])
- GET

### C'est tout ?

Toutes les autres requêtes seront rejetées et renverront une exception.

## Le routage

On récupère l'URI de la requête HTTP, on extrait la partie qui varie pour ensuite exécuter une méthode d'un controlleur.

Un seul point d'entrée :

- ça va éviter que les internautes se promènent partout, surtout là où on veut pas
- ça va être plus simple à maintenir, puisque les URI accessibles sont toutes listées au même endroit
- associées aux URI accessibles, les méthodes de controller : le code est aussi très facile à retrouver
  