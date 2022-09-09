<?php

/** @var \Kirby\Cms\Block $block */

use Kirby\Toolkit\Str;

?>
<<?= $level = $block->level()->or('h2') ?>><?= Str::template($block->text(), option('placeholders', [])) ?></<?= $level ?>>