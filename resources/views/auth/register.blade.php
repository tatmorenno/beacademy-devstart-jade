@extends('template.login');

@section('title', "Cadastro")

@section('body')
<section>
    <div class="card shadow m-3">
        <div class="row g-0">
            <div class="col-md-7">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3 pb-1">
                        <span class="h1 fw-bold mb-0 " style="color: #04A77A;">Jade Shopp</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crie sua conta</h5>
                    <form class="needs-validation" action="{{ route('users.store') }}" method="POST" novalidate>
                        @csrf

                        <div class="form-group mb-3">
                            <label class="form-label" for="formName">Nome completo</label>
                            <input type="text" id="formName" class="form-control form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus />
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="row">



                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="formEmail">Email</label>
                                <input type="text" id="formEmail" class="form-control form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="formCPF">Telefone</label>
                                <input type="number" id="formPhone" class="form-control form-control  @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required />
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="formBirthday">Data de nascimento</label>
                                <input type="date" id="formBirthday" class="form-control form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required />
                                @error('birth_date')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="formCPF">CPF</label>
                                <input type="number" id="formCPF" class="form-control form-control  @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required />
                                @error('cpf')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label" for="zipcode">CEP</label>
                                <input type="number" class="form-control form-control  @error('zipcode') is-invalid @enderror" name="zipcode" id="zipcode" value="{{ old('zipcode') }}" required>
                                @error('zipcode')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-7 mb-3">
                                <label class="form-label" for="address">Endereço</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ old('address') }}" required>
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-2 mb-3">
                                <label for="number_house" class="form-label">Número</label>
                                <input type="text" class="form-control @error('number_house') is-invalid @enderror" name="number_house" id="number_house" value="{{ old('number_house') }}" required>
                                @error('number_house')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-3 mb-3">
                                <label for="complement_house" class="form-label">Complemento</label>
                                <input type="text" class="form-control" name="complement_house" id="complement_house" value="{{ old('complement_house') }}">
                            </div>

                            <div class="form-group col-md-4 mb-3">
                                <label for="district" class="form-label">Bairro</label>
                                <input type="text" class="form-control @error('district') is-invalid @enderror" name="district" id="district" value="{{ old('district') }}" required>
                                @error('district')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label for="city" class="form-label">Cidade</label>
                                <input type="text" class="form-control @error('district') is-invalid @enderror" name="city" id="city" value="{{ old('city') }}" required>
                                @error('city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-2 mb-3">
                                <label class="form-label" for="state">Estado</label>
                                <input type="text" id="state" class="form-control form-control  @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required />
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

                        <div class="pt-1 mb-3">
                            <button class="btn btn-success btn-lg btn-block" type="submit">Criar conta</button>
                        </div>

                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Já tem uma conta? <a href="{{ route('login') }}" style="color: #393f81;">Clique aqui para entrar</a>
                        </p>
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
    const INPUT_NUMBER_HOUSE = document.getElementById('number_house');
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
