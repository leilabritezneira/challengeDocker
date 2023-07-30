<?php $this->layout('layout.tpl', ['categories' => $categories, 'editors' => $editors]) ?>

    <?php $this->start('main') ?>
        <h1><?= $category->name; ?></h1>


        <div class="row">

            <?php foreach ($games as $game) : ?>
                <?php $this->insert('partials/_card-product.tpl', ['game' => $game]) ?>
            <?php endforeach; ?>

            <?php if (count($games) == 0) : ?>
                <p>Aucun produit dans cette catégorie</p>
            <?php endif; ?>

        </div>
    
    <?php $this->stop() ?>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>