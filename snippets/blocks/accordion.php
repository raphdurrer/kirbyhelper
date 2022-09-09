<?php foreach ($block->accordion()->toStructure() as $item) :?>
    <details>
        <summary><?= $item->title()?></summary>
        <div class="accordion_content">
            <?= $item->text()->toBlocks() ?>
        </div>
    </details>
<?php endforeach; ?>