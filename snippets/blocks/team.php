<?php

use Kirby\Cms\Html;
use Kirby\Toolkit\A;

$teamMembers = [];
$avifSrcset = ['300w'  => ['width' => 300, 'height' => 200, 'format' => 'avif', 'crop' => true], '600w'  => ['width' => 600, 'height' => 400, 'format' => 'avif', 'crop' => true], '900w'  => ['width' => 900, 'height' => 600, 'format' => 'avif', 'crop' => true]];
$webpSrcset = ['300w'  => ['width' => 300, 'height' => 200, 'format' => 'webp', 'crop' => true], '600w'  => ['width' => 600, 'height' => 400, 'format' => 'webp', 'crop' => true], '900w'  => ['width' => 900, 'height' => 600, 'format' => 'webp', 'crop' => true]];
$jpegSrcset = ['300w'  => ['width' => 300, 'height' => 200, 'format' => 'jepg', 'crop' => true], '600w'  => ['width' => 600, 'height' => 400, 'format' => 'jepg', 'crop' => true], '900w'  => ['width' => 900, 'height' => 600, 'format' => 'jepg', 'crop' => true]];
$original = ['width' => 600, 'height' => 400, 'crop' => true];

if ($block->useGlobalTeam()->toBool()) {
    $teamMembers = $site->teammembers()->toStructure();
} else {
    $teamMembers = $block->teammembers()->toStructure();
}
?>

<?php
foreach ($teamMembers as $member) :
    $portrait = $member->portrait()->toFile();
?>
    <div class="card" itemscope itemtype="https://schema.org/Person">
        <picture itemprop="image">
            <source srcset="<?= $portrait->srcset($avifSrcset) ?>" type="image/avif" />
            <source srcset="<?= $portrait->srcset($webpSrcset)  ?>" type="image/webp" />
            <img srcset="<?= $portrait->srcset($jpegSrcset)  ?>" src="<?= $portrait->thumb($original)->url() ?>" width="<?= $portrait->thumb($original)->width() ?>" height="<?= $portrait->thumb($original)->height() ?>" alt="<?php e($portrait->alt()->isNotEmpty(), $portrait->alt(), $portrait->filename()) ?>">
        </picture>
        <div class="person">
            <span itemprop="name">
                <?= $member->name() ?>
            </span>
            <?= $member->function() ?>
            <?= Html::email($member->email(), $member->email(), ['itemprop' => 'email']) ?>
            <?= Html::tel($member->phone(), $member->phone(), ['itemprop' => 'telephone']) ?>
        </div>
    </div>
<?php endforeach; ?>