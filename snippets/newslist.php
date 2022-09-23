<?php
$newslistAvif = [
    '800w' => ['width' => 800, 'format' => 'avif'],
    '1024w' => ['width' => 1024, 'format' => 'avif'],
    '1440w' => ['width' => 1440, 'format' => 'avif'],
    '2048w' => ['width' => 2048, 'format' => 'avif']
];
$newslistWebp = [
    '800w' => ['width' => 800, 'format' => 'webp'],
    '1024w' => ['width' => 1024, 'format' => 'webp'],
    '1440w' => ['width' => 1440, 'format' => 'webp'],
    '2048w' => ['width' => 2048, 'format' => 'webp']
];
$newslistJpeg = [
    '800w' => ['width' => 800, 'format' => 'jpeg'],
    '1024w' => ['width' => 1024, 'format' => 'jpeg'],
    '1440w' => ['width' => 1440, 'format' => 'jpeg'],
    '2048w' => ['width' => 2048, 'format' => 'jpeg']
];

$newslist = ['width' => 800]
?>

<nav class="news-navigation">
    <ul>
        <?php foreach (collection('childpages') as $newsArticle) : ?>
            <li class="card">
                <a href="/<?= $page->slug() . "/" . $newsArticle->slug(); ?>">
                    <?php $image = $newsArticle->teaserimage()->toFile(); ?>
                    <picture>
                        <source srcset="<?= $image->srcset($newslistAvif) ?>" type="image/avif">
                        <source srcset="<?= $image->srcset($newslistWebp) ?>" type="image/webp">
                        <img srcset="<?= $image->srcset($newslistJpeg) ?>" src="<?= $image->thumb($newslist)->url() ?>" alt="<?php e($image->alt()->isNotEmpty(), $image->alt(), $image->safename()) ?>">
                    </picture>
                    <h3 class="teasertitle">
                        <?= $newsArticle->title() ?>
                    </h3>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>