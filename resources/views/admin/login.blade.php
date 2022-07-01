@extends('template.login');

@section('title', "Admin login")

@section('body')
<section>
    <div class="card shadow">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://cdn.pixabay.com/photo/2015/10/09/20/37/library-979895_960_720.jpg" class="img-fluid rounded-start" alt="Imagem da pádina de login de administrador">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <span class="h1 fw-bold mb-0">Jade Shopp</span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entrar com sua conta</h5>

                        <div class="form-outline mb-4">
                            <input type="email" id="formEmail" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Email">Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="formPassword" class="form-control form-control-lg" />
                            <label class="form-label" for="formPassword">Senha</label>
                        </div>

                        <div class="pt-1 mb-2">
                            <button class="btn btn-success btn-lg btn-block" type="button">Login</button>
                        </div>

                        <a class="small text-muted" href="!#">Esqueceu a senha?</a>
                        <p class="mt-3 mb-1 pb-lg-2" style="color: #393f81;">Voltar para <a href="{{ route('home') }}"
                            style="color: #393f81;">Home</a>.</p>
                        <p class="pb-lg-2" style="color: #393f81;">Caso não seja um administrador <a href="{{ route('users.login') }}"
                        style="color: #393f81;">clique aqui</a> e entre com sua conta.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
