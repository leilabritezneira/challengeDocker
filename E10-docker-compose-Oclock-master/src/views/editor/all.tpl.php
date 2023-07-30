<?php $this->layout('layout.tpl', ['categories' => $categories, 'editors' => $editors]) ?>

    <?php $this->start('main') ?>
        <?php foreach ($editors as $editor) :
            $noGameForThisEditor = true;
        ?>

            <h2 class="mt-5"><?= $editor->name; ?></h2>

            <div class="row">

                <?php foreach ($games as $game) : ?>
                    <?php if ($game->id_editor === $editor->getId()) :
                        $noGameForThisEditor = false;
                    ?>
                        <?php $this->insert('partials/_card-product.tpl', ['game' => $game]) ?>
                    <?php endif; ?>
                <?php endforeach; ?>


                <?php if ($noGameForThisEditor) : ?>
                    <p>Aucun produit pour cet éditeur</p>
                <?php endif; ?>

            </div>
        <?php endforeach; ?>

        <?php $this->stop() ?>