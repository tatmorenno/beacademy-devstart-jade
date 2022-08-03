    @extends('template.index');
    <title>Usuário {{ $user->name }}</title>
<body>

@if (session()-> has('update'))
<div class="container  alert alert-warning" role="alert">
    <strong>Usuário alterado com sucesso!</strong>
</div>
@endif

    <div class="container pt-5">
        <h2 class="h1 fw-bold mb-0 " style="color: #04A77A;">Usuário</h2>
        <h4 class="h2 fw-bold mb-0 " style="color: #04A77A;">{{ $user->name }}</h4>
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
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($user->updated_at)) }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning text-white">Editar</a>
                            
                            <form class="d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"class="btn btn-danger text-white">Excluir</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
        </table>
    
        <div>
            <a href="{{ route('users.list') }}" class="btn btn-success btn-lg btn-block">Voltar</a>
        </div>

    </div>  
</body>
</html>