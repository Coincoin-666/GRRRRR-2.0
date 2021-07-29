<?php
require "classes/Character.php";
require "classes/Paladin.php";
require "classes/Orc.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GRRRRRRRR</title>
</head>
<style>
    body {
        background-image: url(https://s3.amazonaws.com/spoonflower/public/design_thumbnails/0410/4788/rspoonflower_rooster_duck_shop_preview.png);
    }
</style>

<body>
    <h1 class="text-center fw-bold text-decoration-underline bg-light w-100">GRRRRRRRR - The Ultimate Battle Of The Century Of The Universe Of Gods</h1>
    <div class="container w-50 bg-dark text-light">
        <!-- Hero -->
        <div class="row p-3">
            <div class="card col border-success bg-dark m-2">
                <h2 class="card-title text-end">insertNameHere</h2>
                <p class="card-text">insertDescriptionHere</p>
                <p class="card-text">
                    Compétences:
                <ul>
                    <li><strong>HP: </strong><?= $phil->get_health() ?></li>
                    <li><strong>Rage: </strong><?= $phil->get_rage() ?></li>
                    <li><strong>Arme: </strong><?= $phil->get_weapon() ?></li>
                    <li><strong>Force: </strong><?= $phil->get_weaponDamage() ?></li>
                    <li><strong>Bouclier: </strong><?= $phil->get_shield() ?></li>
                    <li><strong>Défense: </strong><?= $phil->get_shieldValue() ?></li>
                </ul>
                </p>
            </div>
            <!-- Orc -->
            <div class="card col border-danger bg-dark m-2">
                <h2 class="card-title text-end">Joanna L'Orc</h2>
                <p class="card-text">Moi je m'appelle Joanna. Je suis une femelle Orc pas très sympa.</p>
                <p class="card-text">
                    Compétences:
                <ul>
                    <li><strong>HP: </strong><?= $joanna->get_health() ?></li>
                    <li><strong>Rage: </strong><?= $joanna->get_rage() ?></li>
                    <li><strong>Force: </strong><?= $joanna->getDamage() ?></li>
                </ul>
                </p>
            </div>
        </div>

        <!-- FIGHT! -->
        <div class="row p-3">
            <?php
            while ($phil->get_health() > 0) {
                $joanna->attack();
                $phil->is_attacked($joanna->getDamage());

                if ($phil->get_health() > 0) {
            ?>
                    <p class="text-danger">Attention! Joanna attaque et inflige <?= $joanna->getDamage() ?> points de dégât!</p>
                    <?php

                    ?>
                    <p class="text-success">Notre héros est mal en point, plus que <?= $phil->get_health() ?> points de vie...</p>
                    <p class="text-success">Mais ses points de rage augmentent:
                        <?php
                        $phil->increaseRage();
                        echo $phil->get_rage();
                        ?>
                    </p>
                    <?php
                    if ($phil->get_rage() >= 100) {
                        $joanna->gets_hit($phil->get_weaponDamage());
                        $phil->set_rage(0);
                    ?>
                        <p class="text-warning">Joanna est touchée! - <?= $phil->get_weaponDamage(); ?> points de vie pour Joanna qui se retrouve à <?= $joanna->get_health() ?></p>
                        <?php
                        if ($joanna->get_health() <= 0) {
                        ?>
                            <p class="text-light fw-bold text-decoration-underline">† Joanna est décédée. †</p>
                    <?php
                    break;
                        }
                    }
                } else {
                    ?>
                    <p class="text-light fw-bold text-decoration-underline">† Phil est décédé. †</p>
            <?php
                }
            }
            ?>
        </div>
    </div>

</body>

</html>