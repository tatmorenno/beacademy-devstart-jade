@extends('template.login');

@section('title', "Cadastro")

@section('body')
<section>
    <div class="card shadow">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <form action="{{route('users.store')}}" method="post">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <span class="h1 fw-bold mb-0">Jade Shopp</span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crie sua conta</h5>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Nome Completo</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Senha</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="phone-number">Telefone</label>
                            <input type="text" id="phone-number" name="phone-number" class="form-control form-control-lg" onkeypress="$(this).mask('(00) 00009-0000')" required />
                        </div>


                        <div class="form-outline mb-4">
                            <label class="form-label" for="birth-date">Data de nascimento</label>
                            <input type="date" id="birth-date" name="birth-date" class="form-control form-control-lg" required />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" class="form-control form-control-lg" onkeypress="$(this).mask('000.000.000-00');" required />
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-success btn-lg btn-block" type="submit">Criar conta</button>
                        </div>

                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Já tem uma conta? <a href="{{ route('users.login') }}" style="color: #393f81;">Click aqui para logar</a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://cdn.pixabay.com/photo/2019/08/08/20/29/squirrel-4393784_960_720.jpg" class="img-fluid rounded-end h-100" alt="Imagem da pádina de cadastro de usuário">
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('js/mask.js') }}"></script>
@endsection
