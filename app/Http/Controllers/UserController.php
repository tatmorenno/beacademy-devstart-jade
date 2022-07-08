<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUpdateUserFormRequest;

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

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($request->password);
        $data['is_admin'] = 0;

        $this->model->create($data);

        return redirect()->route('users.create_success');

    }

    public function email_error()
    {
        return view('users.email_error');
    }

    public function cpf_error()
    {
        return view('users.cpf_error');
    }

    public function create_success()
    {
        return view('users.create_success');
    }
}
