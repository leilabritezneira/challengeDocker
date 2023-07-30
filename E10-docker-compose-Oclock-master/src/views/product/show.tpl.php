<?php $this->layout('layout.tpl', ['categories'=>$categories, 'editors'=>$editors]) ?>

        <?php $this->start('main') ?>

        <h1><?= $game->title ?></h1>

        <div class="row mt-5 mb-5">
            <div class="col">
                <img src="images/products/<?= $game->image ; ?>">
            </div>
            <div class="col">
                <strong>Caractéristiques</strong>
                <table class="table table-stripped">
                    <tr>
                        <td>Catégorie</td>
                        <td><a href="category/<?= $game->id_category ?>"><?= $game->category_name ?></a></td>
                    </tr>
                    <tr>
                        <td>Editeur</td>
                        <td><a href="editor/<?= $game->id_editor ?>"><?= $game->editor_name ?></a></td>
                    </tr>
                    <tr>
                        <td>Date de parution</td>
                        <td><?= $controller->dateFr($game->date_release) ?></td>
                    </tr>
                    <tr>
                        <td>Age minimum</td>
                        <td><?= $game->minimum_age ?>+</td>
                    </tr>
                </table>
            </div>
        </div>

        <p>
        <?= $game->description ?>
        </p>

        <button type="button" class="btn btn-success">Ajouter au panier <?= $game->price ?> €</button>

    <?php $this->stop() ?>