#!/usr/bin/env php
<?php

date_default_timezone_set('UTC');

set_time_limit(0);

(@include_once __DIR__ . '/vendor/autoload.php') || @include_once __DIR__ . '/../../../autoload.php';

use Symfony\Component\Console\Application;
use Triplecheck\Command\AnalyzeCommand;

$app = new Application('Triplecheck.io Command Line', '0.1.0');
$app->add(new AnalyzeCommand());
$app->run();
