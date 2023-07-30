<?php $this->layout('layout.tpl', ['categories'=>$categories, 'editors'=>$editors]) ?>


<!-- début du remplissage de la section "main" -->
<?php $this->start('main') ?>

<div class="container mt-2 mb-4">

    <?php 
    foreach ($gamesOrderByYear as $year => $games) :
        $noGameInThisCategory = true;
        
    ?>

        <h2 class="mt-5"><?= $year ?></h2>

        <div class="row">

            <?php foreach ($games as $game) : ?>
                 <!-- insertion d'un fragment de HTML avec transmission de donnée -->
                 <?php $this->insert('partials/_card-product.tpl', ['game' => $game]) ?>
            <?php endforeach; ?>

        </div>
    <?php endforeach; ?>

</div>

<!-- fin du remplissage de la section "main" -->
<?php $this->stop() ?>