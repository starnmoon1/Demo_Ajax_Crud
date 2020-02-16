<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function getData()
    {
        $users = User::select([
            'id',
            'name',
            'email',
        ]);

        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="#delete-'.$user->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-delete"></i> Delete</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }

    public function index()
    {
        return view('index');
    }

    public function store()
    {

    }

    public function delete($id)
    {
        $user = new User();
        $user = DB::findOrFail($id);
        DB::table('users')->delete();
        return view('index');

    }


}
