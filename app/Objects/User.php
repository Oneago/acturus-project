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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}