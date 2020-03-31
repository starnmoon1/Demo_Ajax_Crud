<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\UserRequest;
use App\Http\Services\Users\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(UserRequest $request)
    {
        $this->userService->create($request);
        Session::flash('register-success', 'Create success!');
        return redirect()->route('home');
    }

    public function postComment(Request $request, $id)
    {
        $comment = new Comment();
        $comment->comment_user = $request->comment_user;
        $comment->user_id = $id;
        $comment->save();

        return back();

    }

    public function getDetail()
    {
        $user = $this->userService->findById('1');
        return view('products.detail', compact('user'));
    }
}
