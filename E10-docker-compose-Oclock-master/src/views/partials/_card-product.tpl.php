
<div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4">
    <div class="card">
        <img src="/images/products/<?= $game->image; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $game->title; ?></h5>

            <div class="mb-2">
                <span class="badge bg-success"><?= $game->price; ?> €</span>
            </div>

            <a href="/product/<?= $game->getId(); ?>" class="btn btn-primary">Découvrir</a>
        </div>
    </div>
</div>
        