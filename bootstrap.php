<?php

use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->afterBuild(function($jigsaw) {
    $baseUrl = $jigsaw->getConfig('baseUrl');
    $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

    collect($jigsaw->getOutputPaths())->each(function ($path) use ($baseUrl, $sitemap) {
        if (!str_starts_with($path, '/assets')) {
            $sitemap->addItem($baseUrl . $path, time(), Sitemap::DAILY);
        }
    });

    $sitemap->write();
});
