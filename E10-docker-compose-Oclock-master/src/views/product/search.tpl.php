<?php $this->layout('layout.tpl', ["search" => $search, 'categories'=>$categories, 'editors'=>$editors]) ?>

<!-- début du remplissage de la section "main" -->
<?php $this->start('main') ?>

<div class="container mt-2 mb-4">
    <h1>Résultat(s) de la recherche : "<?= $search ?>"</h1>

    <div class="row">

        <?php foreach ($games as $game) : ?>
             <!-- insertion d'un fragment de HTML avec transmission de donnée -->
             <?php $this->insert('partials/_card-product.tpl', ['game' => $game]) ?>
        <?php endforeach; ?>


        <?php if (count($games) == 0) : ?>
            <div class="col">
                Aucun résultat
            </div>
        <?php endif; ?>

    </div>

</div> 

<!-- fin du remplissage de la section "main" -->
<?php $this->stop() ?>