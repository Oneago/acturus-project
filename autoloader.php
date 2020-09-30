<?php
// This is a custom autoloader for this template

use App\Config\DotEnvConfig;
use App\Config\WhoopsConfig;

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


// Start DB Vars
$_ENV["DB_HOST"] = $_ENV["DEBUG_MODE"] ? $_ENV["DEBUG_DB_HOST"] : $_ENV["PRODUCTION_DB_HOST"];
$_ENV["DB_NAME"] = $_ENV["DEBUG_MODE"] ? $_ENV["DEBUG_DB_NAME"] : $_ENV["PRODUCTION_DB_NAME"];
$_ENV["DB_USER"] = $_ENV["DEBUG_MODE"] ? $_ENV["DEBUG_DB_USER"] : $_ENV["PRODUCTION_DB_USER"];
$_ENV["DB_PASS"] = $_ENV["DEBUG_MODE"] ? $_ENV["DEBUG_DB_PASS"] : $_ENV["PRODUCTION_DB_PASS"];