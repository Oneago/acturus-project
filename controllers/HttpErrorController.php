<?php


namespace App\Controllers;

use App\Bases\TwigController;
use Slim\Interfaces\ErrorRendererInterface;
use Throwable;

/**
 * Class HttpErrorController is a 404 page
 */
class HttpErrorController extends TwigController implements ErrorRendererInterface
{
    /**
     * ExampleController constructor.
     * @param int|null $code
     * @param string|null $message
     * @param string|null $title
     * @param string|null $description
     */
    public function __construct(
        private ?int $code = null,
        private ?string $message = null,
        private ?string $title = null,
        private ?string $description = null
    )
    {
        parent::__construct();
        $this->render();
    }

    public function render(): string
    {
        http_response_code($this->code ?? 200);
        /** @noinspection PhpUnhandledExceptionInspection */
        return $this->renderHTML("HttpError.twig", [
            "code" => $this->code,
            "message" => $this->message,
            "title" => $this->title,
            "description" => $this->description,
        ]);
    }

    public function __invoke(Throwable $exception, bool $displayErrorDetails): string
    {
        $this->code = $exception->getCode();
        $this->message = $exception->getMessage();
        return $this->render();
    }
}
