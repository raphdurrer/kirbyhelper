<!DOCTYPE html>
<html lang="<?php e($kirby->languages()->isNotEmpty(), $kirby->language(), 'de') ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.json">
    <title>
        <?php
        $seotitle = '';
        if ($page->seotitle()->isNotEmpty()) {
            $seotitle = $page->seotitle();
        } elseif ($site->seotitle()->isNotEmpty()) {
            $seotitle = $site->seotitle();
        } else {
            $seotitle = $page->title();
        }
        echo $seotitle;
        ?>
    </title>

    <?php echo $page->metaTags(['og', 'twitter']) ?>
    <?= css('/assets/css/website.css', 'screen') ?>
    <?= css('/site/plugins/kirbyhelper/assets/css/print.css', 'print') ?>
    <?= css('@auto') ?>
</head>

<body>