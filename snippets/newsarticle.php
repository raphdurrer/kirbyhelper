<?php foreach ($page->newsmedia()->toLayouts() as $layout) : ?>
    <div class="grid<?php e($layout->gridwidth() == '100%', '--full'); ?>" style="<?php e($layout->blockStart()->isNotEmpty(), '--topMargin:' . $layout->blockStart() . ';') ?><?php e($layout->blockEnd()->isNotEmpty(), '--bottomMargin:' . $layout->blockEnd() . ';') ?>">
        <?php foreach ($layout->columns() as $column) : ?>
            <div class="column media" style="--gridColumns:<?= $column->span() ?>">
                <?php foreach ($column->blocks() as $block) : ?>
                    <div class="block_<?= $block->type(); ?><?php e($block->lead()->toBool() == true, '--lead'); ?>" style="<?php e($block->color()->isNotEmpty(), '--clrText:' . $block->color()); ?> ">
                        <?= $block ?>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </div>
<?php endforeach ?>