#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

use App\Commands\CreateMiddleware;
use App\Commands\CreateModel;
use App\Commands\CreateView;
use App\Commands\GenerateProductionProject;
use App\Commands\KillDocker;
use App\Commands\RunDocker;
use App\Commands\RunPhpServer;
use App\Commands\SassCompiler;
use App\Commands\SassMaker;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new CreateView());
$application->add(new CreateMiddleware());
$application->add(new CreateModel());
$application->add(new RunPhpServer());
$application->add(new RunDocker());
$application->add(new KillDocker());
$application->add(new GenerateProductionProject());
$application->add(new SassCompiler());
$application->add(new SassMaker());

/** @noinspection PhpUnhandledExceptionInspection */
$application->run();