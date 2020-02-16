<?php


namespace App\Http\Repositories;


use App\User;

class UserRepository implements RepoUserInterface
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function getAll()
    {
       return $this->user->all();
    }

    function store($obj)
    {
        // TODO: Implement store() method.
    }
}
