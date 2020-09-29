<?php
// This is a custom autoloader for this template
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require_once "vendor/autoload.php";

// Start dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Start whoops
$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

ini_set("display_errors", $_ENV["DEBUG_MODE"]);
ini_set("display_startup_errors", $_ENV["DEBUG_MODE"]);
error_reporting(E_ALL);

// Start autoload
$loader = new Nette\Loaders\RobotLoader;

// directories to be indexed by RobotLoader (including subdirectories)
$loader->addDirectory(__DIR__ . "/models", __DIR__ . "/controllers");

// use "temp" directory for cache
$loader->setTempDirectory(__DIR__ . "/temp");
$loader->register(); // Run the RobotLoader
