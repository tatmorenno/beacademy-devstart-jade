<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function login()
    {
        return view('users.login');
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
       $data = $request->all();

       if(User::where('email','=', $request->email)->exists() ) {
           return redirect()->route('users.create_error');
           exit;
        }

        $data['password'] = bcrypt(now(), $request->password);
        $data['is_admin'] = 0;
        
        $this->model->create($data);

        return redirect()->route('users.create_success');
    }

    public function create_error()
    {
        return view('users.create_error');
    }

    public function create_success()
    {
        return view('users.create_success');
    }
}
