@extends('template.login');
@section('title', "Produtos")

@section('body')
<section>
    <div class="container mt-5">

        <h3 class="pt-5 text-center">Nossos Produtos</h3>
        <p class="pb-3 text-center">Aproveite nossa promoção!</p>

        <div class="d-flex justify-content-center">

            <div class="row">



                @foreach($products as $product)

                <div class="col-md-4">
                    <div class="d-flex justify-content-between">
                        <div class="card text-center py-3 m-3" style="width: 20rem; height: 25rem;">
                            <div class="text-center">
                                <img src="{{ $product->image }}" alt="Imagem do produto" style="width: 10rem;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-start px-2">R$ {{ $product->sale_price }}</p>
                                <a href="/form" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
</section>
@endsection
