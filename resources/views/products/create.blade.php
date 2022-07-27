<div style="background-color: #069e6e">

    @extends('template.index');



    <title>Cadastro de produtos</title>

    <nav class="nav nav-masthead justify-content-center float-md-end">
        <a href="{{ route('products.indexAdmin') }}" class="nav-link text-white">Home</a>
        <a href="{{ route('products.indexAdmin') }}" class="nav-link text-white">Lista de produtos</a>
    </nav>
    <hr>
</div>
@section('body')

<section>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="container mt-8 card text-center py-3 m-3" style="width: 60rem; height: 35rem;">

            <h2 class="pt-5 text-left text-black">Cadastro de produtos</h2>
            <hr>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="name">Nome</span>
                </div>
                <input id="name" name="name" type="text" class="form-control" placeholder="Nome do produto" aria-label="Nome do produto" aria-describedby="NNome">
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-md-4 col-xs-6">
                    <!-- Valor de Aquisição -->
                    <label for="basic-url" class="fw-bold">Valor de<br>aquisição</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">R$</span>
                        </div>
                        <input id="cost_price" name="cost_price" type="text" class="form-control" aria-label="cost_price" vertical-align="center">
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <!-- Quantidade de Aquisição -->
                    <label for="basic-url" class="fw-bold">Quantidade de<br>aquisição</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">UNID.</span>
                        </div>
                        <input id="quantity" name="quantity" type="text" class="form-control" aria-label="quantity" vertical-align="center">
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <!-- Valor de venda -->
                    <label for="basic-url" class="fw-bold">Preço de<br>venda</label>
                    <div class="input-group mb-3 form-control-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">R$</span>
                        </div>
                        <input id="sale_price" name="sale_price" type="text" class="form-control" aria-label="sale_price">
                    </div>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="image" name="image" placeholder="https://place-hold.it/250x250.png" style="height: 70px">
                <label for="image" class="fw-bold">URL da imagem do produto (https://place-hold.it/250x250.png)</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 100px"></textarea>
                <label for="description" class="fw-bold">Descrição do produto</label>
            </div>



            <div class="conteiner text-center mt-3">

                <button type="submit" class="btn btn-success text-white">Cadastrar</button>

            </div>

        </div>


    </form>
</section>
@endsection


<style>
    .desc-text {
        /* float: left;
        margin-top: 15px;
        width: 75%;
        display: inline-block; */
        white-space: nowrap;
        overflow: hidden !important;
        text-overflow: ellipsis;
    }
</style>
