<?php


namespace App\Controllers;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class ExampleController is a example class, you can delete or use as a model example for your app
 */
class ExampleController extends TwigController
{

    /**
     * ExampleController constructor.
     * @param string $title Page title
     * @param string $body Page body
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __construct(string $title, string $body)
    {
        parent::__construct();
        echo $this->renderHTML("example.twig", [
            "title" => $title,
            "body" => $body
        ]);
    }
}
