<?php

    include 'Connect.php';
    $reponse = $bdd->query('SELECT * FROM Members');
    while ($donnees = $reponse->fetch())
    { ?>

<div class="col-md-4 px-4 mb-4 col-6 px-lg-5">
    <a class="img-effect" href=<?= $donnees["lien"] ?>>
        <div class="card project">
            <img class="card-img img-effect rounded-circle effect" src="<?= $donnees["image"] ?>" alt="Card image">
            <div class="card-body p-0">
                <p class="mt-3 mb-1">
                    <b><?= $donnees["name"] ?> <?= $donnees["lastname"] ?></b>
                </p>
               
            </div>
        </div>
    </a>
</div>

    <?php } ?>

