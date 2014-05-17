<?php
/**
 * This file is part of ProjectName.
 *
 * (c) 2014 Marco Garofalo
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!file_exists(__DIR__ . '../vendor/autoload.php')) {
    throw new \RuntimeException('Run composer.');
}

$loader = require __DIR__ . '../vendor/autoload.php';

// $loader->add('ProjectName\Test', __DIR__);
