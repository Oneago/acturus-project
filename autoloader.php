<?php
// This is a custom autoloader for this template

require_once "vendor/autoload.php";
require_once "DotEnvConfig.php";

$dotenv = new DotEnvConfig();

if ($_ENV["DEBUG_MODE"] ?? true) {
    require_once "WhoopsConfig.php";
    new WhoopsConfig();
}
$dotenv->initConfigs();

// Start autoload
$loader = new Nette\Loaders\RobotLoader;

// directories to be indexed by RobotLoader (including subdirectories)
$loader->addDirectory(__DIR__ . "/models", __DIR__ . "/controllers");

// use "temp" directory for cache
$loader->setTempDirectory(__DIR__ . "/temp");
$loader->register(); // Run the RobotLoader