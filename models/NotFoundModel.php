<?php


use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class NotFoundModel
 */
class NotFoundModel extends TwigController
{

    /**
     * NotFoundModel constructor.
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __construct()
    {
        parent::__construct();
        echo $this->renderHTML("notFound.twig");
    }
}
