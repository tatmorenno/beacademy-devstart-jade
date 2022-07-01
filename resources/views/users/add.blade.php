@extends('template.login');

@section('title', "Cadastro")

@section('body')
<section>
    <div class="card shadow">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
              <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0">Jade Shopp</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crie sua conta</h5>

                    <div class="form-outline mb-4">
                        <input type="email" id="formEmail" class="form-control form-control-lg" required/>
                  <label class="form-label" for="formEmail">Email</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="formPassword" class="form-control form-control-lg" required/>
                  <label class="form-label" for="formPassword">Senha</label>
                </div>

                <div class="pt-1 mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="button">Criar conta</button>
                </div>

                <p class="mb-5 pb-lg-2" style="color: #393f81;">Já tem uma conta? <a href="{{ route('users.login') }}"
                style="color: #393f81;">Click aqui para logar</a></p>
            </form>
        </div>
    </div>
    <div class="col-md-4">
      <img src="https://cdn.pixabay.com/photo/2019/08/08/20/29/squirrel-4393784_960_720.jpg" class="img-fluid rounded-end h-100" alt="...">
    </div>
        </div>
      </div>
</section>
@endsection
