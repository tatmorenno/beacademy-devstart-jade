<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Checkout</title>

<body>
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
                            <h1 class="text-center mt-2 mb-4">Checkout</h1>

                            <div class="row">
                                <div class="col-lg-6 px-5 py-4">

                                    <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase" style="color:#04A77A">Seus produtos</h3>

                                    @foreach ($shoppingCarts as $shoppingCart)
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="flex-shrink-0">
                                            <img src="{{ $shoppingCart->product->image }}" class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                                        </div>
                                        <div class="card p-3 flex-grow-1 ms-3">
                                            <a href="#!" class="text-black"><i class="fas fa-times"></i></a>
                                            <h5 class="text-primary"> {{ $shoppingCart->product->name }} </h5>

                                            <p class="fw-bold mb-0 me-5 mb-2">Preço R$ {{ number_format($shoppingCart->product->sale_price, 2, ',', '.') }} </p>
                                            <p class="fw-bold text-black text-start mb-2" value="{{ $shoppingCart->quantity }}">Quantidade: {{ $shoppingCart->quantity }} </p>

                                        </div>
                                    </div>
                                    @endforeach

                                    <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                                    <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #04a77a57;">
                                        <h5 class="fw-bold mb-0">Total:</h5>
                                        <h5 class="fw-bold mb-0">R$ {{ number_format($total, 2, ',', '.') }}</h5>
                                    </div>

                                </div>
                                <div class="col-lg-6 px-5 py-4">

                                    <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase" style="color:#04A77A">Pagamento</h3>

                                    <form class="" action=" {{route('checkout.submit')}}" method="POST">
                                        @csrf

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="typeText">Número do Cartão</label>
                                            <input type="text" id="typeText" class="form-control form-control-lg" size="17" name="cc_number" minlength="19" maxlength="19" />
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="typeName">Nome no cartão</label>
                                            <input type="text" id="typeName" class="form-control form-control-lg" size="17" name="cc_name" />
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label" for="typeExp">Válido até</label>
                                                    <input type="text" id="typeExp" class="form-control form-control-lg" name="cc_expired" size="7" id="exp" minlength="7" maxlength="7" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label" for="typeText">CVV</label>
                                                    <input type="text" id="typeText" class="form-control form-control-lg" name="cc_cvv" size="1" minlength="3" maxlength="3" />
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-5">Li e concordo com o <a href="#!">termo de uso</a></p>

                                        <button type="submit" class="btn btn-success btn-lg px-5" style="background-color:#04A77A">Comprar</button>
                                    </form>



                                    <!-- <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                    <a href="#!"><i class="fas fa-angle-left me-2"></i>Voltar</a>
                  </h5> -->



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
