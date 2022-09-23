<!DOCTYPE html>
<html lang="<?php e($kirby->languages()->isNotEmpty(), $kirby->language(), 'de') ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.json">
    <title><?= $meta['title'] ?></title>
    <?php foreach ($meta as $tag => $value) : ?>
        <?php if ($tag != 'title' && !empty($value)) : ?>
            <meta name="<?= $tag ?>" content="<?= $value ?>">
        <?php endif; ?>
    <?php endforeach; ?>
    <?php foreach ($opengraph as $ogtag => $value) : ?>
        <?php if (!empty($value)) : ?>
            <meta property="<?= $ogtag ?>" content="<?= $value ?>">
        <?php endif; ?>
    <?php endforeach; ?>
    <?= css('/assets/css/website.css', 'screen') ?>
    <?= css('/site/plugins/kirbyhelper/assets/css/print.css', 'print') ?>
    <?= css('@auto') ?>
</head>
<body>