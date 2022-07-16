@extends('template.login');

@section('title', "Usuário {$user->name}")

@section('body')
<section>
    <div class="card shadow m-4">
        <div class="row g-0">
            <div class="col-md-7">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3 pb-1">
                        <span class="h1 fw-bold mb-0">Usuário {{$user->name}}</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Atualizar dados</h5>
                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="form-group mb-4">
                            <label class="form-label" for="formName">Nome</label>
                            <input type="text" id="formName" class="form-control form-control-lg @error('name')
                                is-invalid
                            @enderror" name="name" value="{{ $user->name }}" />

                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label" for="formEmail">Email</label>
                            <input type="text" id="formEmail" class="form-control form-control-lg  @error('email')
                                is-invalid
                            @enderror" name="email" value="{{ $user->email }}" />
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label" for="formCPF">Telefone</label>
                            <input type="number" id="formPhone" class="form-control form-control-lg  @error('phone')
                                is-invalid
                            @enderror" name="phone" value="{{ $user->phone }}" />
                            @error('phone')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group mb-4">
                            <label class="form-label" for="formBirthday">Data de nascimento</label>
                            <input type="date" id="formBirthday" class="form-control form-control-lg  @error('birth_date')
                                is-invalid
                            @enderror" name="birth_date" value="{{ $user->birth_date }}" />
                            @error('birth_date')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group mb-4">
                            <label class="form-label" for="formCPF">CPF</label>
                            <input type="number" id="formCPF" class="form-control form-control-lg  @error('cpf')
                                is-invalid
                            @enderror" name="cpf" value="{{ $user->cpf }}" />
                            @error('cpf')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label" for="formPassword">Senha</label>
                            <input type="password" id="formPassword" class="form-control form-control-lg  @error('password')
                                is-invalid
                            @enderror" name="password" value="{{ old('password') }}" />
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-success btn-lg btn-block" type="submit">Atualizar</button>
                            <a href="{{ route('users.list') }}" class="btn btn-danger btn-lg btn-block">Cancelar</a>                     
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <img src="https://cdn.pixabay.com/photo/2019/08/08/20/29/squirrel-4393784_960_720.jpg" class="img-fluid rounded-end h-100" alt="Imagem da pádina de cadastro de usuário">
            </div>
        </div>
    </div>
</section>
@endsection
