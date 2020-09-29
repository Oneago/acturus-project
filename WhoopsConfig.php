<?php


use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class WhoopsConfig
{

    /**
     * WhoopsConfig constructor.
     */
    public function __construct()
    {
        // Start whoops
        $whoops = new Run;

        // Configure the PrettyPageHandler:
        $errorPage = new PrettyPageHandler();
        $errorPage->setPageTitle("Oneago app is broken!"); // Set the page's title
        $errorPage->setEditor($_ENV["EDITOR_COMMAND"]);                    // Set the editor used for the "Open" link

        $whoops->pushHandler($errorPage);
        $whoops->register();
    }
}