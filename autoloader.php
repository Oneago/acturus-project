<?php
// This is a custom autoloader for this template
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require_once "vendor/autoload.php";

// Start dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_ENV["DEBUG_MODE"]) {
// Start whoops
    $whoops = new Run;

// Configure the PrettyPageHandler:
    $errorPage = new PrettyPageHandler();
    $errorPage->setPageTitle("Oneago app is broken!"); // Set the page's title
    $errorPage->setEditor("idea");                    // Set the editor used for the "Open" link
    $whoops->pushHandler($errorPage);
    $whoops->register();
}

// Start autoload
$loader = new Nette\Loaders\RobotLoader;

// directories to be indexed by RobotLoader (including subdirectories)
$loader->addDirectory(__DIR__ . "/models", __DIR__ . "/controllers");

// use "temp" directory for cache
$loader->setTempDirectory(__DIR__ . "/temp");
$loader->register(); // Run the RobotLoader