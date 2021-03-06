<?php
require_once __DIR__.'/vendor/autoload.php';

use Triplecheck\Common;

$plugin = Triplecheck\Triplecheck::create('Triplecheck\Phpcs\Plugin');

$options = [
    "argument" => "report=json --standard=ECG",
    "param"    => $argv[1]
];

$results = $plugin->configure($options)->run();
$results = json_decode($results[0]);

//die(print_r($results));

$scorer = new Triplecheck\Phpcs\Scoring($results);
$score = $scorer->calculate();

echo "Your code score is: $score \r\n";
