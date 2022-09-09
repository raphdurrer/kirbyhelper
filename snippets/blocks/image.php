<?php

/** @var \Kirby\Cms\Block $block */

use Kirby\Cms\Html;
use Kirby\Toolkit\Str;

$alt     = $block->alt();
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$link    = $block->link();
$ratio   = $block->ratio()->or('auto');
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt ?? $image->alt();
    $src = $image->url();
}


?>
<?php if ($src) : ?>
    <figure<?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>>
        <?php if ($link->isNotEmpty()) : ?>
            <a href="<?= Str::esc($link->toUrl()) ?>">
                <picture>
                    <source srcset="<?= $src->thumb(['crop' => ($crop == true) ? true : false, 'format' => 'avif'])->url() ?>" type="image/avif" />
                    <source srcset="<?= $src->thumb(['crop' => ($crop == true) ? true : false, 'format' => 'webp'])->url() ?>" type="image/webp" />
                    <img src="<?= $src ?>" alt="<?= $alt->esc() ?>" style="<?php e($ratio != 'auto', '--imgratio:' . $ratio . ';') ?> <?php e($crop, '--imgcrop: cover;', '--imgcrop:contain;') ?>;">
                </picture>
            </a>
        <?php else : ?>
            <picture>
                <source srcset="<?= $src->thumb(['crop' => ($crop == true) ? true : false, 'format' => 'avif'])->url() ?>" type="image/avif" />
                <source srcset="<?= $src->thumb(['crop' => ($crop == true) ? true : false, 'format' => 'webp'])->url() ?>" type="image/webp" />
                <img src="<?= $src ?>" alt="<?= $alt->esc() ?>" style="<?php e($ratio != 'auto', '--imgratio:' . $ratio . ';') ?> <?php e($crop, '--imgcrop:cover;', '--imgcrop:contain;') ?>;">
            </picture>
        <?php endif ?>

        <?php if ($caption->isNotEmpty()) : ?>
            <figcaption>
                <?= $caption ?>
            </figcaption>
        <?php endif ?>
        </figure>
    <?php endif ?>



