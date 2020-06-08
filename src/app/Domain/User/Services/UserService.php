<?php

namespace App\Domain\User\Services;

use App\Domain\Users\Contracts\UserRepository;

class UserService
{
    /**
     * @var \App\Domain\Users\Contracts\UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function findOneById($id)
    {
        return $this->userRepository->findOneById($id);
    }
}