<?php /** @noinspection PhpMissingFieldTypeInspection */


namespace App\Models;

use mysqli;

abstract class Connection
{
    /**
     * @var string
     */
    protected $errorDetails;

    /**
     * @return mysqli database connection
     */
    protected static function init(): mysqli
    {
        $con = mysqli_connect($_ENV["DB_HOST"], $_ENV["DB_USER"], $_ENV["DB_PASS"], $_ENV["DB_NAME"], $_ENV["DB_PORT"] ?? 3306) or die("Fail connecting to DB");
        mysqli_set_charset($con, 'utf8');
        return $con;
    }

    /**
     * @return string|null return error string. If error not exist return null
     */
    public function getErrorDetails(): ?string
    {
        return $this->errorDetails;
    }

    public abstract function get(int $id): ?object;

    public abstract function list(string $search = null): ?array;

    public abstract function create(object $model): bool;

    public abstract function update(object $model): bool;

    public abstract function delete(int $id): bool;
}