<?php
// This is a custom autoloader for this template

use App\Config\DotEnvConfig;
use App\Config\WhoopsConfig;

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = new DotEnvConfig();
$dotenv->initConfigs();
new WhoopsConfig($dotenv->getVars());

// Start DB Vars
$_ENV["DB_HOST"] = $_ENV["DEBUG_MODE"] ? $_ENV["DEBUG_DB_HOST"] : $_ENV["PRODUCTION_DB_HOST"];
$_ENV["DB_NAME"] = $_ENV["DEBUG_MODE"] ? $_ENV["DEBUG_DB_NAME"] : $_ENV["PRODUCTION_DB_NAME"];
$_ENV["DB_USER"] = $_ENV["DEBUG_MODE"] ? $_ENV["DEBUG_DB_USER"] : $_ENV["PRODUCTION_DB_USER"];
$_ENV["DB_PASS"] = $_ENV["DEBUG_MODE"] ? $_ENV["DEBUG_DB_PASS"] : $_ENV["PRODUCTION_DB_PASS"];