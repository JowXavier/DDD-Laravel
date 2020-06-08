<?php

namespace App\Interfaces\Http\Controllers;

use App\Domain\User\Services\UserService;

class UserController extends Controller
{
    /**
     * @var \App\Domain\User\Services\UserService
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
