<!-- héritage du layout -->
<?php $this->layout('layout.tpl', ['categories' => $categories, 'editors' => $editors]) ?>

    <!-- début du remplissage de la section "main" -->
    <?php $this->start('main') ?>

        <h1>Tous les jeux</h1>

        <div class="row">
            
            <?php foreach ($games as $game) : ?>
                <!-- insertion d'un fragment de HTML avec transmission de donnée -->
                <?php $this->insert('partials/_card-product.tpl', ['game' => $game]) ?>

            <?php endforeach; ?>

        </div>

    <?php $this->stop() ?>

    