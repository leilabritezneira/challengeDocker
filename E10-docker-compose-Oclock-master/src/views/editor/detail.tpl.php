<?php $this->layout('layout.tpl', ['categories' => $categories, 'editors' => $editors]) ?>

    <?php $this->start('main') ?>
        <h1><?= $editor->name; ?></h1>

        <div class="row">
            <?php foreach ($games as $game) : ?>
                <?php $this->insert('partials/_card-product.tpl', ['game' => $game]) ?>
            <?php endforeach; ?>

            <?php if (count($games) == 0) : ?>
                <p>Aucun produit dans cette catégorie</p>
            <?php endif; ?>
        </div>

    <?php $this->stop() ?>