<?php


namespace App\Objects;


class User
{

    /**
     * User constructor.
     * @param int $id
     * @param string $user
     * @param string $email
     */
    public function __construct(
        private int $id,
        private string $user,
        private string $email,
    )
    {
    }
}