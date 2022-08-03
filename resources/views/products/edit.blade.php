
@extends('template.index');

<title>Cadastro de produtos</title>

@section('body')

<section>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="container mt-8 card text-center py-3 m-3" style="width: 60rem; height: 40rem;">

            <h2 class="pt-5 text-left h2 fw-bold mb-0" style="color: #04A77A;">Produto</h2>
            <h3 class="h3 fw-bold mb-0 " style="color: #04A77A;">{{ $product->name }}</h3>
            <hr>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="name">Nome</span>
                </div>
                <input id="name" name="name" type="text" class="form-control" placeholder="Nome do produto" aria-label="Nome do produto" aria-describedby="NNome" value="{{ $product->name }}">
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-md-4 col-xs-6">
                    <!-- Valor de Aquisição -->
                    <label for="basic-url" class="fw-bold">Valor de<br>aquisição</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">R$</span>
                        </div>
                        <input id="cost_price" name="cost_price" type="text" class="form-control" aria-label="cost_price" vertical-align="center" value="{{ $product->cost_price }}">
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <!-- Quantidade de Aquisição -->
                    <label for="basic-url" class="fw-bold">Quantidade de<br>aquisição</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">UNID.</span>
                        </div>
                        <input id="quantity" name="quantity" type="text" class="form-control" aria-label="quantity" vertical-align="center" value="{{ $product->quantity }}">
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <!-- Valor de venda -->
                    <label for="basic-url" class="fw-bold">Preço de<br>venda</label>
                    <div class="input-group mb-3 form-control-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">R$</span>
                        </div>
                        <input id="sale_price" name="sale_price" type="text" class="form-control" aria-label="sale_price" value="{{ $product->sale_price }}">
                    </div>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="image" name="image" placeholder="https://place-hold.it/250x250.png" style="height: 70px" value="{{ $product->image }}">
                <label for="image" class="fw-bold">URL da imagem do produto (https://place-hold.it/250x250.png)</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 100px">{{ $product->description }}</textarea>
                <label for="description" class="fw-bold">Descrição do produto</label>
            </div>



            <div class="conteiner text-center mt-3">

                <button type="submit" class="btn btn-success text-white">Atualizar</button>

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
