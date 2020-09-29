<?php


use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;


/**
 * Class TwigController is a basic twig loader
 */
class TwigController
{
    protected $templateEngine;
    private $templatesPath = "../views";

    /**
     * TwigController constructor.
     */
    public function __construct()
    {
        $loader = new FilesystemLoader($this->templatesPath);
        $this->templateEngine = new Environment($loader, [
            "debug" => $_ENV["DEBUG_MODE"],
            "cache" => false,
            "scriptName" => $_SERVER["SCRIPT_NAME"]
        ]);
    }

    /**
     * @param string $fileName Twig file to load
     * @param array $data Twig data to pass
     * @return string Twig rendered HTML
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @noinspection PhpUnhandledExceptionInspection
     */
    public function renderHTML(string $fileName, array $data = []): string
    {
        return $this->templateEngine->render($fileName, array_merge($data, [
            "scriptName" => $_SERVER["SCRIPT_NAME"]     // Passing php script name to twig
        ]));
    }
}
