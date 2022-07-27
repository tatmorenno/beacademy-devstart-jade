@extends('template.index');

<title>{{ $product->name }}</title>

@section('body')

<section>
    <div class="container mt-5">

        <h2 class="pt 5 text-left text-black">Produto cadastrado</h2>
        <h4>{{ $product->name }}</h4>
        <hr>
        <div class="container w-100 p-3">
            <table class="table table-borderless table -striped align-items-center">
                    <thead class="text-left">
                        <tr>
                            <td class="align-middle">
                                <div class="conteiner text-center">
                                    <img src="{{ $product->image }}" alt="Imagem do produto" style="width: 10rem;">
                                    
                                    <h1></h1>

                                    <a href="" class="btn btn-warning text-white">Editar</a>
                                    <form class="d-inline-block" action="" method="POST">
                                        <button type="submit"class="btn btn-danger text-white">Excluir</button>
                                    </form>
                                </div>
                            </td>
                            <td class="align-top">
                                <h5 class="fw-bold">DADOS DO PRODUTO</h5>
                                <hr>
                               
                                <table class="table table-borderless table -striped align-items-center" >
                                    <thead class="text-left">
                                        <tr>
                                            <td class="align-middle text-center fw-bold">Preço<br>anterior</td>
                                            <td class="align-middle text-center fw-bold">Preço<br>atual</td>
                                            <td class="align-middle text-center fw-bold">Preço de<br>custo</td>
                                            <td class="align-middle text-center fw-bold">Quantidade em <br>estoque</td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-center">R$ {{ $product->sale_price  + 438}}</td>
                                            <td class="align-middle text-center">R$ {{ $product->sale_price }}</td>
                                            <td class="align-middle text-center">R$ {{ $product->cost_price }}</td>
                                            <td class="align-middle text-center">{{ $product->quantity }}</td>
                                        </tr>
                            
                                    </thead>
                                </table>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
            
            <div class="container w-100 p-3">
                <table class="table table-borderless table -striped align-items-center">
                    <thead class="text-left">
                        <tr>
                            <td class="align-middle" style="width:1900px">
                            <h6 class="fw-bold">DESCRIÇÃO DO PRODUTO</h6>   
                                <p style="text-align: justify">{{ $product->description }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                            
                                <h7 class="text-left fw-bold">Cadastrado em: </h7><h7>{{ date('d/m/Y', strtotime($product->created_at)) }}</h7><br>
                                <h7 class="text-left fw-bold">Atualizado em: </h7><h7> {{ date('d/m/Y', strtotime($product->updated_at)) }}</h7><br>
                            
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>

        <div>
            <a href="{{ route('products.indexAdmin') }}" class="btn btn-success btn-lg btn-block">Voltar</a> 
            
        </div>



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
