<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\service\Users\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAll();
        return view('admin.users.list');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $this->userService->create($request);
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = $this->userService->findById($id);
        return view('admin.users.edit',compact('user'));
    }

    public function update(CreateUserRequest $request, $id)
    {
        $this->userService->update($request, $id);
        return redirect()->route('users.index');
    }

    public function show()
    {

    }
}
