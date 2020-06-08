<?php

namespace NomeProjeto\Interfaces\Http\Controllers;

use NomeProjeto\Domain\User\Services\UserService;

class UserController extends Controller
{
    /**
     * @var \NomeProjeto\Domain\User\Services\UserService
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $this->userService->findOneById(1);
        return view('welcome');
    }
}
