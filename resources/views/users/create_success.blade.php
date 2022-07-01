@extends('template.login');

@section('title', "Desculpe")

@section('body')
<section>
    <div class="card shadow">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h1>Pronto! 😁</h1>
                    <p>Seu cadastro foi realizado co sucesso.</p>
                    <a class="btn btn-success" href="{{ route('users.login') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
