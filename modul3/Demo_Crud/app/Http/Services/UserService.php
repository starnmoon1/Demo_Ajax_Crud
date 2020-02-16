<?php


namespace App\Http\Services;


use App\Http\Repositories\RepoUserInterface;

class UserService implements ServiceUserInterface
{
    protected $userRepo;
    public function __construct(RepoUserInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    function getAll()
    {
        return $this->userRepo->getAll();
    }

    function create($request)
    {
        // TODO: Implement create() method.
    }
}
