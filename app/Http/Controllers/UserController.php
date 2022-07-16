<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUpdateUserFormRequest;
use Symfony\Component\HttpFoundation\Request;

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

    public function listUsers()
    {
        $users = User::all();

        return view('users.list', compact('users'));
    }

    public function showUsers($id)
    {
        if (!$user = User::find($id))
            return redirect()->route('users.list');

        $title = 'Usuário' . $user->name;
        return view('users.show', compact('user', 'title'));
    }

    public function editUsers($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.list');

        return view('users.edit', compact('user'));
    }

    public function updateUsers(Request $request, $id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.list');

        $data = $request->all(); //only('nome', 'email')

        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);
        return redirect()->route('users.list');
    }
}
