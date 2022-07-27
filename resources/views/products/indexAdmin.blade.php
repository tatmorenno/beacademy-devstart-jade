<div style="background-color: #069e6e">

@extends('template.index');
@section('title', "Produtos")

        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a href="" class="nav-link text-white">Home</a>
            <a href="/products/admin/create" class="nav-link text-white">Novo produto</a>
        </nav>
        <hr>
</div>

@section('body')

<section>

    <div class="container">

        <h1 class="pt-5 text-left text-black">Produtos cadastrados</h1>
        <hr>
        
        <div class="d-flex justify-content-center">

            <div class="row">

                <table class="table table-hover table -striped align-items-center">
                    <thead class="text-center">
                        <tr>
                        <!--    <th scope="col" class="align-middle"></th> -->
                            <th scope="col" class="align-middle"></th>
                            <th scope="col" class="align-middle">Nome</th>
                            <th scope="col" class="align-middle">Preço<br>Anterior</th>
                            <th scope="col" class="align-middle">Preço<br>Atual</th>
                            <th scope="col" class="align-middle">Quantidade<br>em<br>Estoque</th>
                            <th scope="col" class="align-middle">Última<br>atualização</th>
                            <th scope="col" class="align-middle">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                    @foreach($products as $product)
                        <tr>
                        <!--    <th scope="row" class="align-middle">{{ $product->id }}</th> -->
                            <td class="align-middle"><img src="{{ $product->image }}" alt="Imagem do produto" style="width: 4rem;"></td>
                            <td class="align-middle">{{ $product->name }}</td>
                            <td class="align-middle"><p>R$ {{ $product->sale_price + 438 }}</p></td>
                            <td class="align-middle"><p>R$ {{ $product->sale_price }}</p></td>
                            <td class="align-middle"><p>{{ $product->quantity }}</p></td>
                            <td class="align-middle">{{ date('d/m/Y', strtotime($product->updated_at)) }}</td>
                            <td class="align-middle"><a href="{{ route('products.showAdmin', $product->id) }}" class="btn btn-success text-white">Visualizar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
