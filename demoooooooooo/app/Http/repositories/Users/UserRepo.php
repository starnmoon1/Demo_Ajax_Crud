<?php


namespace App\Http\repositories\Users;


use App\User;

class UserRepo implements UserRepoInterface
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function getAll()
    {
        return $this->user->all()->paginate(6);
    }

    function saveObj($obj)
    {
        $obj->save();
    }

    function delete($obj)
    {
        $obj->delete();
    }

    function findById($id)
    {
        return $this->user->findOrFail($id);
    }



    function search($keyword)
    {
        return $this->user->where('name','LIKE','%'.$keyword.'%')->paginate(6);
    }
}
