<?php


namespace App\Controllers;

use App\Bases\MiddlewareInterface;
use App\Bases\TwigController;

/**
 * Class ExampleController is a example class, you can delete or use as a model example for your app
 */
class ExampleController extends TwigController
{
    private $title;
    private $body;

    /**
     * ExampleController constructor.
     * @param string $title Page title
     * @param string $body Page body
     * @param MiddlewareInterface ...$middlewares
     */
    public function __construct(string $title, string $body, MiddlewareInterface...$middlewares)
    {
        parent::__construct($middlewares);
        $this->title = $title;
        $this->body = $body;
        $this->render();
    }

    public function render()
    {
        $status = self::checkMiddlewares();
        if ($status) {
            /** @noinspection PhpUnhandledExceptionInspection */
            echo self::renderHTML("example.twig", [
                "title" => $this->title,
                "body" => $this->body
            ]);
        } else {
            echo "No correct passing middleware";
        }
    }
}
