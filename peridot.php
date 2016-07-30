<?php

use Evenement\EventEmitterInterface;
use Peridot\Concurrency\ConcurrencyPlugin;
use Peridot\Console\Environment;
use Peridot\Plugin\Watcher\WatcherPlugin;
use Peridot\Reporter\CodeCoverageReporters;
use Peridot\Reporter\Dot\DotReporterPlugin;
use Peridot\Reporter\ListReporter\ListReporterPlugin;
use Symfony\Component\Console\Input\InputInterface;

error_reporting(-1);

return function (EventEmitterInterface $emitter) {
    new WatcherPlugin($emitter);
    new DotReporterPlugin($emitter);
    new ListReporterPlugin($emitter);
    new ConcurrencyPlugin($emitter);

    // set the default path
    $emitter->on('peridot.start', function (Environment $environment) {
        $environment->getDefinition()
            ->getArgument('path')->setDefault('specs');
    });

    // disable watcher for concurrency workers
    $emitter->on('peridot.execute', function (InputInterface $input) {
        if (getenv('PERIDOT_TEST_TOKEN')) {
            $input->setOption('watch', false);
        }
    });

    $coverage = new CodeCoverageReporters($emitter);
    $coverage->register();

    //$prophecy = new ProphecyPlugin($emitter);
};
