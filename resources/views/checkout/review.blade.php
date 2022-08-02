<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Revisar carrinho</title>

<body>

    @php
    session_start();
    @endphp

    <style>
        body {
            background-color: #04A77A;
            color: #04A77A;
        }

        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }
    </style>
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card shopping-cart" style="border-radius: 15px;">
                        <div class="card-body text-black">
                            <h1 class="text-center mt-2 ">Revisar pedido</h1>

                            <div class="row">
                                <div class="col-lg-12 px-5">

                                    <h3 class="mb-5  text-center fw-bold text-uppercase" style="color:#04A77A">Seus produtos</h3>

                                    @php
                                    $shoppingCarts = $_SESSION['cart'];
                                    $total = 0;
                                    Session::put('cart', $shoppingCarts);
                                    @endphp

                                    @foreach ($shoppingCarts as $key=> $shoppingCart)
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="flex-shrink-0">
                                            <img src="{{ $shoppingCart['image'] }}" class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                                        </div>
                                        <div class=" card p-3 flex-grow-1 ms-3">
                                            <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                                            <h5 class="text-primary"> {{ $shoppingCart['name'] }} </h5>
                                            <p class="fw-bold text-black text-start mb-2" value="{{ $shoppingCart['quantity'] }}">Quantidade: {{ $shoppingCart['quantity'] }} </p>
                                            <p class="fw-bold pe-3">Preço: R$ {{ $shoppingCart['price'] * $shoppingCart['quantity'] }} </p>

                                            @php
                                            $total += $shoppingCart['price'] * $shoppingCart['quantity'];
                                            @endphp

                                        </div>
                                    </div>
                                    @endforeach

                                    <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                                    <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #04a77a57;">
                                        <h5 class="fw-bold mb-0">Total:</h5>
                                        <h5 class="fw-bold mb-0">R$ {{$total}}</h5>
                                    </div>


                                    <div class="text-center">
                                        <a href="/products" class="btn btn-warning btn-block btn-lg px-5 me-3">Voltar</a>
                                        <a type="submit" href="{{ route('checkout.storeCart') }}" class="btn btn-success btn-block btn-lg px-5 ms-3">Comprar</a>
                                    </div>




                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
