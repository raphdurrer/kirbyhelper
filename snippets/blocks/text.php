<?php

/** @var \Kirby\Cms\Block $block */

use Kirby\Toolkit\Str;
?>
 
<?= Str::template($block->text()->kt(), option('placeholders', [])) ?>