@extends('template.index');
@section('title', "Produtos")

@section('body')

<section>
    <div class="container mt-5">

        <h3 class="pt-5 text-center text-black">Nossos Produtos</h3>
        <p class="pb-3 text-center text-black">Aproveite nossa promoção!</p>

        <div class="d-flex justify-content-center">

            <div class="row">



                @foreach($products as $product)

                <div class="col-md-4">
                    <div class="d-flex justify-content-between">
                        <div class="card text-center py-3 m-3" style="width: 20rem; height: 22rem;">
                            <div class="text-center">
                                <img src="{{ $product->image }}" alt="Imagem do produto" style="width: 10rem;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fs-6">{{ $product->name }}</h5>
                                <s class="card-text text-center px-2 text-secondary">R${{ $product->sale_price  + 438}}</s>
                                <p class="card-text text-center px-2 fs-5 fw-bold text-danger">R$ {{ $product->sale_price }}</p>
                                <a href="/products" class="btn btn-primary px-5">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



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
