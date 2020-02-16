<?php

namespace App\Http\Controllers;

use App\Http\Services\ServiceUserInterface;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    public function __construct(ServiceUserInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAll();
        return view('admin.users.list', compact($users));
    }
}
