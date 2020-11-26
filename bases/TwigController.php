<?php


namespace App\Bases;


use Oneago\AdaConsole\Bases\BaseTwigController;

/**
 * Class TwigController is a basic twig loader
 */
abstract class TwigController extends BaseTwigController
{
    public function __construct(array $middlewares = [])
    {
        parent::__construct($middlewares);
        $this->twigAdditions();
    }

    /**
     * Add global variables, functions and extensions to twig
     */
    private function twigAdditions()
    {
        // Example custom twig additions
        /*
        $this->templateEngine->addExtension(new TranslationExtension(TranslationConfig::getTranslationConfig()));   // Add extension

        $this->templateEngine->addGlobal("getRequestUri", $_SERVER["REQUEST_URI"]);                                 // Add global Variable

        $this->templateEngine->addFunction(new TwigFunction('getCss', function ($cssFile) {
            return sprintf('/css/%s', ltrim($cssFile, '/'));                                                        // Add function
        }));
        */
    }
}
