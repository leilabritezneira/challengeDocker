<?php $this->layout('layout.tpl', ['categories' => $categories, 'editors' => $editors]) ?>

        <?php $this->start('main') ?>

        <h1>OPlaystore</h1>

        <p>
            Nous vous présentons les meilleurs jeux du moment.
        </p>

        <h2>Notre sélection de jeux</h2>

        <div class="row">
            <?php
            // à la place de $data['games']
            // grace à extract($data)
            // on a $games
            ?>
            <?php foreach ($games as $game) : ?>
                <?php $this->insert('partials/_card-product.tpl', ['game' => $game]) ?>
            <?php endforeach; ?>

        </div>

        <?php $this->stop() ?>

        <?php $this->start('nav_footer') ?>

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

        <?php $this->stop() ?>


    