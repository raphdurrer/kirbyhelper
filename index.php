<?php
Kirby::plugin('docono/kirbyhelper', [

    'blueprints' => [
        // Users/Roles
        'users/editor' => __DIR__ . '/blueprints/users/editor.yml',
        // Templates
        'pages/default' => __DIR__ . '/blueprints/pages/default.yml',
        'pages/news' => __DIR__ . '/blueprints/pages/news.yml',
        'pages/newsarticle' => __DIR__ . '/blueprints/pages/newsarticle.yml',
        //Blocks
        'blocks/heading' => __DIR__ . '/blueprints/blocks/heading.yml',
        'blocks/text' => __DIR__ . '/blueprints/blocks/text.yml',
        'blocks/image' => __DIR__ . '/blueprints/blocks/image.yml',
        'blocks/accordion' => __DIR__ . '/blueprints/blocks/accordion.yml',
        'blocks/team' => __DIR__ . '/blueprints/blocks/team.yml',
        // Sections
        'sections/actions' => __DIR__ . '/blueprints/sections/actions.yml',
        'sections/allpages' => __DIR__ . '/blueprints/sections/allpages.yml',
        'sections/navigation' => __DIR__ . '/blueprints/sections/navigation.yml',
        // Tabs
        'tabs/company' => __DIR__ . '/blueprints/tabs/company.yml',
        'tabs/files' => __DIR__ . '/blueprints/tabs/files.yml',
        'tabs/portrait' => __DIR__ . '/blueprints/tabs/portrait.yml',
        'tabs/pagetree' => __DIR__ . '/blueprints/tabs/pagetree.yml',
        'tabs/seo' => __DIR__ . '/blueprints/tabs/seo.yml',
        // Files
        'files/default' => __DIR__ . '/blueprints/files/default.yml',
        'files/image' => __DIR__ . '/blueprints/files/image.yml',
    ],

    'snippets' => [
        'header' => __DIR__ . '/snippets/header.php',
        'footer' => __DIR__ . '/snippets/footer.php',
        'blocks/text' => __DIR__ . '/snippets/blocks/text.php',
        'blocks/heading' => __DIR__ . '/snippets/blocks/heading.php',
        'blocks/team' => __DIR__ . '/snippets/blocks/team.php',
        'blocks/accordion' => __DIR__ . '/snippets/blocks/accordion.php',
    ],

    'collections' => [
        'allpages' => require 'collections/allpages.php',
        'globalteam' => require 'collections/globalteam.php'
    ],

    'templates' => [
        'default' => __DIR__ . 'templates/default.php',
        'news' => __DIR__ . 'templates/news.php',
        'newsarticle' => __DIR__ . 'templates/newsarticle.php'
    ],

    'areas' => [
        'team' => function ($kirby) {
            return [
                'label' => 'Team',
                'icon'  => 'users',
                'menu'  => true,
                'link'  => 'team',
            ];
        }
    ],
]);
