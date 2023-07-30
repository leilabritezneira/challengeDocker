<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oPlaystore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/site.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">oPlaystore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/games')? ' active':'' ?>" aria-current="page" href="/games">Tous nos jeux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/categories')? ' active':'' ?>" href="/categories">Catégories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/editors')? ' active':'' ?>" href="/editors">Editeurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/games/order-by/year')? ' active':'' ?>" href="/games/order-by/year">Jeux par année</a>
                    </li>
                </ul>
                <form class="d-flex" action="/search" method="POST">
                    <input class="form-control me-2" name="search" type="search" placeholder="rechercher un jeu video" value="<?= $search ?? '' ?>" aria-label="rechercher un jeu video">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container mt-2 mb-4">
       <!-- Création de deux sections, ces sections vont nous permettre d'insérer des contenus via les templates qui hériteront de layout.tpl.php -->
        <?= $this->section('main') ?>

        <?= $this->section('nav_footer') ?>

        <div class="row">
            <div class="col">
                <div class="home-categorie-editeur p-3">
                    <h2>Les jeux par catégorie</h2>
                    <ul>
                        <?php
                        // à la place de $data['categories']
                        // grace à extract($data)
                        // on a $categories
                        ?>
                        <?php foreach ($categories as $category) : ?>
                            <li><a href="/category/<?= $category->getId() ?>"><?= $category->name ; ?></a></li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="home-categorie-editeur p-3">
                    <h2>Les éditeurs de jeu</h2>
                    <ul>
                        <?php
                        // à la place de $data['editors']
                        // grace à extract($data)
                        // on a $editors
                        ?>
                        <?php foreach ($editors as $editor) : ?>
                            <li><a href="/editor/<?= $editor->getId() ?>"><?= $editor->name ; ?></a></li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>