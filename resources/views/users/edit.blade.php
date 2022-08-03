@extends('template.login');

@section('title', "Usuário {$user->name}")

@section('body')
<section>
    <div class="card shadow m-3">
        <div class="row g-0">
            <div class="col-md-7">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3 pb-1">
                        <span class="h1 fw-bold mb-0 " style="color: #04A77A;">Usuário {{$user->name}}</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Atualizar dados</h5>
                    <form class="needs-validation" action="{{ route('users.update', $user->id) }}" method="POST" novalidate>
                        @method('PUT')
                        @csrf

                        <div class="form-group mb-3">
                            <label class="form-label" for="formName">Nome completo</label>
                            <input type="text" id="formName" class="form-control form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus />
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="row">



                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="formEmail">Email</label>
                                <input type="text" id="formEmail" class="form-control form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="formCPF">Telefone</label>
                                <input type="number" id="formPhone" class="form-control form-control  @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required />
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="formBirthday">Data de nascimento</label>
                                <input type="date" id="formBirthday" class="form-control form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ $user->birth_date }}" required />
                                @error('birth_date')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="formCPF">CPF</label>
                                <input type="number" id="formCPF" class="form-control form-control  @error('cpf') is-invalid @enderror" name="cpf" value="{{ $user->cpf }}" required />
                                @error('cpf')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="zipcode">CEP</label>
                                <input type="text" class="form-control form-control  @error('zipcode') is-invalid @enderror" name="zipcode" id="zipcode" value="{{ $user->zipcode }}" required>
                                @error('zipcode')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-7 mb-3">
                                <label class="form-label" for="address">Endereço</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ $user->address }}" required>
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-2 mb-3">
                                <label for="number-house" class="form-label">Número</label>
                                <input type="text" class="form-control @error('number-house') is-invalid @enderror" name="number_house" id="number_house" value="{{ $user->number_house }}" required>
                                @error('number-house')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-3 mb-3">
                                <label for="complement-house" class="form-label">Complemento</label>
                                <input type="text" class="form-control" name="complement_house" id="complement_house" value="{{ $user->complement_house }}">
                            </div>

                            <div class="form-group col-md-4 mb-3">
                                <label for="district" class="form-label">Bairro</label>
                                <input type="text" class="form-control @error('district') is-invalid @enderror" name="district" id="district" value="{{ $user->district }}" required>
                                @error('district')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label for="city" class="form-label">Cidade</label>
                                <input type="text" class="form-control @error('district') is-invalid @enderror" name="city" id="city" value="{{ $user->city }}" required>
                                @error('city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-2 mb-3">
                                <label class="form-label" for="state">Estado</label>
                                <input type="text" id="state" class="form-control form-control  @error('state') is-invalid @enderror" name="state" value="{{ $user->state }}" required />
                                @error('state')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label class="form-label" for="formPassword">Senha</label>
                            <input type="password" id="formPassword" class="form-control form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required />
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
                <img src="{{ asset('assets/img/register.svg') }}" class="img-fluid rounded-end h-100" alt="Imagem da pádina de cadastro de usuário">
            </div>
        </div>
    </div>
</section>


<script>
    const INPUT_ZIPCODE = document.getElementById('zipcode');
    const INPUT_ADDRESS = document.getElementById('address');
    const INPUT_NUMBER_HOUSE = document.getElementById('number-house');
    const INPUT_DISTRICT = document.getElementById('district');
    const INPUT_CITY = document.getElementById('city');
    const INPUT_STATE = document.getElementById('state');

    INPUT_ZIPCODE.addEventListener('blur', () => {
        let cep = INPUT_ZIPCODE.value;

        if (cep.length !== 8) {
            return;
        }

        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(json => {
                INPUT_ADDRESS.value = json.logradouro;
                INPUT_DISTRICT.value = json.bairro;
                INPUT_CITY.value = json.localidade;
                INPUT_STATE.value = json.uf;

                INPUT_NUMBER_HOUSE.focus();

            });
    })
</script>

@endsection
