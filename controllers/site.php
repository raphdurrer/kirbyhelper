<?php

/**
 * Meta-Tags
 */

use Kirby\Toolkit\A;
use Spatie\Ray\Ray;

return function ($page, $site) {

    /**
     * Title
     */
    $title = '';
    if ($page->seotitle()->isNotEmpty()) {
        $title = $page->seotitle()->value();
    } elseif ($site->seotitle()->isNotEmpty()) {
        $title = $site->seotitle()->value();
    } else {
        $title = $site->title()->value();
    }

    /**
     * Description
     */
    $description = '';
    if ($page->seodescription()->isNotEmpty()) {
        $description = $page->seodescription()->value();
    } elseif ($site->seodescription()->isNotEmpty()) {
        $description = $site->seodescription()->value();
    } else {
        //nothing
    }

    /**
     * Robots
     */
    $robots = '';
    if ($page->noindex()->toBool()) {
        $robots = 'noindex nofollow';
    } else {
        $robots = 'all';
    }

    /**
     * OG Image
     */
    $ogimage = '';
    $imageDimensions = ['width' => 1200, 'height' => 630, 'crop' => true];
    if ($page->seoimage()->isNotEmpty()) {
        $image = $page->seoimage()->toFile();
        $ogimage = $image->thumb($imageDimensions)->url();
    } elseif ($site->seoimage()->isNotEmpty()) {
        $image = $site->seoimage()->toFile();
        $ogimage = $image->thumb($imageDimensions)->url();
    } else {
        //nothing
    }

    $meta = [
        'title' => $title,
        'description' => $description,
        'robots' => $robots
    ];

    $opengraph = [
        'og:title' => $title,
        'og:site_name' => $site->title(),
        'og:description' => $description,
        'og:url' => $page->url(),
        'og:type' => 'website',
        'og:image' => $ogimage,
    ];

    return [
        'meta' => $meta,
        'opengraph' => $opengraph
    ];
};
