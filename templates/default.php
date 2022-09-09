<?php

use Kirby\Cms\Html;
use Kirby\Toolkit\A;
?>

<?php snippet('header'); ?>
<main class="site-main">
    <?php foreach ($page->layout()->toLayouts() as $layout) : ?>
        <div class="grid<?php e($layout->gridwidth() == '100%', '--full'); ?>">
            <?php foreach ($layout->columns() as $column) : ?>
                <div class="column" style="--gridColumns:<?= $column->span() ?>">
                    <?php foreach ($column->blocks() as $block) : ?>
                        <div class="block_<?= $block->type(); ?><?php e($block->lead()->toBool() == true, '--lead'); ?>" style="<?php e($block->color()->isNotEmpty(), '--clrText:' . $block->color()); ?> ">
                            <?= $block ?>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>
</main>
<?php snippet('footer'); ?>