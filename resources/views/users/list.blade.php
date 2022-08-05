    @extends('template.index');


    @if (session()-> has('destroy'))
    <div class="container  alert alert-danger" role="alert">
        <strong>Usuário excluído com sucesso!</strong>
    </div>
    @endif

    <body>
        <div class="Container pt-5">
            <h1 class="h1 fw-bold mb-0 " style="color: #04A77A;">Lista de usuários</h1>
            <hr>
            <table class="table table-hover table -striped">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Cód. Cliente</th>
                        <th scope="col">Nome</th>
                        <th scope="col">e-mail</th>
                        <th scope="col">Data de Cadastro</th>
                        <th scope="col">Última atualização</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($user->updated_at)) }}</td>
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-success text-white">Visualizar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class=" container justify-content-center pagination">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>

    </body>

    </html>
