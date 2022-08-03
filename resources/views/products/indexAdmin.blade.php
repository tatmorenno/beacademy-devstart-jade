
    @extends('template.index');
    @section('title', "Produtos")

@if (session()-> has('destroy'))
<div class="container  alert alert-danger" role="alert">
    <strong>Produto excluído com sucesso!</strong>
</div>
@elseif (session()-> has('create'))
<div class="container  alert alert-success" role="alert">
    <strong>Produto cadastrado com sucesso!</strong>
</div>
@endif

@section('body')

<section>

    <div class="Container pt-5">

        <h1 class="h1 fw-bold mb-0 " style="color: #04A77A;">Produtos cadastrados</h1>
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
                            <td class="align-middle">
                                <p>R$ {{ $product->sale_price + 438 }}</p>
                            </td>
                            <td class="align-middle">
                                <p>R$ {{ $product->sale_price }}</p>
                            </td>
                            <td class="align-middle">
                                <p>{{ $product->quantity }}</p>
                            </td>
                            <td class="align-middle">{{ date('d/m/Y', strtotime($product->updated_at)) }}</td>
                            <td class="align-middle"><a href="{{ route('products.showAdmin', $product->id) }}" class="btn btn-success text-white">Visualizar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

        <div class=" container justify-content-center pagination">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
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
