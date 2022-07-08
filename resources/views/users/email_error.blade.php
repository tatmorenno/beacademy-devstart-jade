@extends('template.login');

@section('title', "Desculpe")

@section('body')
<section>
    <div class="card shadow">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h1>Desculpe! 🙄</h1>
                    <p>Mas o Email informado já possui cadastro no nosso banco de dados.</p>
                    <a class="btn btn-success" href="{{ route('users.create') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
