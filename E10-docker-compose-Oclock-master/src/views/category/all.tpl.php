<?php $this->layout('layout.tpl', ['categories' => $categories, 'editors' => $editors]) ?>

    <?php $this->start('main') ?>

        <?php foreach ($categories as $category) :
            $html = '';
            $title = '<h2 class="mt-5">'.$category->name.'</h2>';
            ?>

            <div class="row">

                <?php foreach ($games as $game) : ?>
                    <?php if ($game->id_category === $category->getId()) :
                        // on met en mémoire tampon tous les affichages
                        ob_start();
                        $this->insert('partials/_card-product.tpl', ['game' => $game]);
                        // on récupère ce qu'il y a dans la mémoire tampon, on le stocke dans $html et on vide la mémoire tampon
                        $html .= ob_get_clean();
                     endif; ?>
                <?php endforeach; ?>


                <?php 
                if ($html != '') : 

                    echo $title;
                    echo $html;
                endif; ?>

            </div>
        <?php endforeach; ?>

        <?php $this->stop() ?>