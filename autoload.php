<?php

use Composer\Autoload\ClassLoader;

$loader = new ClassLoader();
$loader->addPsr4('Hartenthaler\\Webtrees\\Module\\ExtendedFamily\\', __DIR__);
$loader->addPsr4('Hartenthaler\\Webtrees\\Module\\ExtendedFamily\\', __DIR__ . "/resources/lang");
$loader->register();