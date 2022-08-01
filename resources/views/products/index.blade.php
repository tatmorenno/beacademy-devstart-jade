@extends('template.index');
@section('title', "Produtos")

@section('body')

@php
session_start();
@endphp

<section>
    <div class=" mt-5">

        <h3 class="pt-5 text-center text-black">Nossos Produtos</h3>
        <p class="pb-3 text-center text-black">Aproveite nossa promoção!</p>

        <div class="d-flex justify-content-center">

            <div class="row">

                <div class="col-9">


                    @php
                    $items = [];
                    @endphp

                    @foreach($products as $product)

                    @php
                    array_push($items, ['image' => "$product->image", 'name' =>"$product->name", 'price' => "$product->sale_price"])
                    @endphp

                    @endforeach

                    <div class="row">

                        @foreach($items as $key =>$value)
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <div class="card text-center py-3 m-3" style="width: 20rem; height: 25rem;">
                                    <div class="text-center">
                                        <img src="{{ $value['image'] }}" alt="Imagem do produto" style="width: 10rem;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title fs-6">{{ $value['name'] }}</h5>
                                        <s class="card-text text-center px-2 text-secondary">R${{ $value['price'] + 438}}</s>
                                        <p class="card-text text-center px-2 fs-5 fw-bold text-danger">R$ {{ $value['price'] }}</p>
                                        <!-- <a href="?add={{$product->id}}" class="btn btn-primary px-5">Comprar</a> -->
                                        <a href="?add={{$key}}" class="btn btn-primary py-3 ">Adicionar ao cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>

                @php
                if (isset($_GET['add'])) {
                $productId = (int) $_GET['add'];
                if (isset($items[$productId])) {
                if (isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId]['quantity']++;
                } else {
                $_SESSION['cart'][$productId] = array('quantity' => 1, 'name' => $items[$productId]['name'], 'price' => $items[$productId]['price']);
                }



                } else {

                echo '<script>
                    alert("Esse produto não existe")
                </script>';
                }
                }
                @endphp


                <div class="cart col-3">

                    <h2 class="title">Carrinho</h2>

                    @php

                    if(isset($_SESSION['cart'] )){

                    if(isset($_GET['remover'])){
                    unset ($_SESSION['cart'][(int) $_GET['remover']]);
                    }


                    foreach($_SESSION['cart'] as $key => $value){
                    echo '<div class="card mt-2 pt-2 ps-2">';
                        echo '<p class="">' . $value['name'] . ' | Qtd: ' . $value['quantity'] . ' Preço: ' . $value['quantity'] * $value['price'] . '</p>'
                        ;



                        echo '
                    </div>';
                    echo "<a href='?remover= {$key}' . class='badge text-bg-danger'>Remover</a>";
                    }


                    echo '<div class="text-center mt-3">';

                        echo '<button class="btn btn-success ms-2">Ir para pagamento</button>';

                        echo '</div>';

                    }

                    @endphp




                </div>

            </div>





</section>
@endsection


<style>
    .desc-text {
        white-space: nowrap;
        overflow: hidden !important;
        text-overflow: ellipsis;
    }
</style>
