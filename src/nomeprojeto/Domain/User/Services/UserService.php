<?php

namespace NomeProjeto\Domain\User\Services;

use NomeProjeto\Domain\Users\Contracts\UserRepository;

class UserService
{
    /**
     * @var \NomeProjeto\Domain\Users\Contracts\UserRepository
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