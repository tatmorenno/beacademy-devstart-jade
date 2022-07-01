@extends('template.login');

@section('title', "Login")

@section('body')
<section>
    <div class="card shadow">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://cdn.pixabay.com/photo/2019/01/06/20/23/non-woven-bags-3917805_960_720.jpg" class="img-fluid rounded-start" alt="Imagem da página de login de usuário">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="post">
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
                            <button class="btn btn-success btn-lg btn-block" type="submit">Entrar</button>
                        </div>

                        <a class="small text-muted" href="!#">Esqueceu a senha?</a>
                        <p class="mt-3 mb-3 pb-lg-2" style="color: #393f81;">Não tem uma conta? <a href="{{ route('users.create') }}"
                            style="color: #393f81;">Cadastre-se aqui</a>.</p>
                        <p class="pb-lg-2" style="color: #393f81;">Caso seja um administrador <a href="{{ route('admin.login') }}"
                        style="color: #393f81;">clique aqui</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
