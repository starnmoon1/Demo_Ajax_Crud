<?php


namespace App\Http\service\Users;


use App\Http\repositories\Users\UserRepo;
use App\User;

class UserService implements UserServiceInterface
{
    protected $userRepo;
    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }

    public function create($request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->image = $this->uploadImage($request);
        $this->userRepo->saveObj($user);
    }

    public function update($request, $id)
    {
       $user = $this->findById($id);
       $user->fill($request->all());
       if(hasFile('image'))
           $user->image = $this->uploadImage($request);
       $this->userRepo->saveObj($user);
    }

    public function destroy($id)
    {
        $user = $this->findById($id);
        unlink('storage/users' . $user->image);
        $this->userRepo->delete($user);
    }

    public function findById($id)
    {
        return $this->userRepo->findById($id);
    }

    public function search($request)
    {
        $keyword = $request->keyword;
        if (!$keyword){
            return redirect()->route('users.index');
        }else{
            return $this->userRepo->search($keyword);
        }
    }

    public function uploadImage($request)
    {
        if (!$request->hasFile('image')) {
            $image_name = 'images/no_image.jpg';
        } else {
            $image = $request->file('image');
            $image_name = 'images/' . date('d-m-Y H:i:s') . '.' . $image->getClientOriginalName();
            $image->storeAs('public/', $image_name);
        }
        return $image_name;
    }
}
