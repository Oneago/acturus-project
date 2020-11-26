<?php


namespace App\Models;

/**
 * Interface ModelInterface
 * @package App\Models
 *
 * @property string $errorDetails
 */
interface ModelInterface
{
    public function get(int $id): ?object;
    public function create(object $model): bool;

    public function list(string $search = null): array;

    public function update(object $model): bool;
    public function getErrorDetails(): ?string;
}