<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Checkout</title>

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

        .number-input input[type="number"] {
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }

        .number-input input[type=number]::-webkit-inner-spin-button,
        .number-input input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }

        .number-input button {
            -webkit-appearance: none;
            background-color: transparent;
            border: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin: 0;
            position: relative;
        }

        .number-input button:before,
        .number-input button:after {
            display: inline-block;
            position: absolute;
            content: '';
            height: 2px;
            transform: translate(-50%, -50%);
        }

        .number-input button.plus:after {
            transform: translate(-50%, -50%) rotate(90deg);
        }

        .number-input input[type=number] {
            text-align: center;
        }

        .number-input.number-input {
            border: 1px solid #ced4da;
            width: 10rem;
            border-radius: .25rem;
        }

        .number-input.number-input button {
            width: 2.6rem;
            height: .7rem;
        }

        .number-input.number-input button.minus {
            padding-left: 10px;
        }

        .number-input.number-input button:before,
        .number-input.number-input button:after {
            width: .7rem;
            background-color: #495057;
        }

        .number-input.number-input input[type=number] {
            max-width: 4rem;
            padding: .5rem;
            border: 1px solid #ced4da;
            border-width: 0 1px;
            font-size: 1rem;
            height: 2rem;
            color: #495057;
        }

        @media not all and (min-resolution:.001dpcm) {
            @supports (-webkit-appearance: none) and (stroke-color:transparent) {

                .number-input.def-number-input.safari_only button:before,
                .number-input.def-number-input.safari_only button:after {
                    margin-top: -.3rem;
                }
            }
        }

        .shopping-cart .def-number-input.number-input {
            border: none;
        }

        .shopping-cart .def-number-input.number-input input[type=number] {
            max-width: 2rem;
            border: none;
        }

        .shopping-cart .def-number-input.number-input input[type=number].black-text,
        .shopping-cart .def-number-input.number-input input.btn.btn-link[type=number],
        .shopping-cart .def-number-input.number-input input.md-toast-close-button[type=number]:hover,
        .shopping-cart .def-number-input.number-input input.md-toast-close-button[type=number]:focus {
            color: #212529 !important;
        }

        .shopping-cart .def-number-input.number-input button {
            width: 1rem;
        }

        .shopping-cart .def-number-input.number-input button:before,
        .shopping-cart .def-number-input.number-input button:after {
            width: .5rem;
        }

        .shopping-cart .def-number-input.number-input button.minus:before,
        .shopping-cart .def-number-input.number-input button.minus:after {
            background-color: #9e9e9e;
        }

        .shopping-cart .def-number-input.number-input button.plus:before,
        .shopping-cart .def-number-input.number-input button.plus:after {
            background-color: #4285f4;
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

                                    @php
                                    $shoppingCarts = $_SESSION['cart'];
                                    $total = 0;
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

                                </div>
                                <div class="col-lg-6 px-5 py-4">

                                    <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase" style="color:#04A77A">Pagamento</h3>

                                    <div class="form-outline mb-5">
                                        <label class="form-label" for="typeText">Número do Cartão</label>
                                        <input type="text" id="typeText" class="form-control form-control-lg" size="17" name="cc_number" minlength="19" maxlength="19" />
                                    </div>

                                    <div class="form-outline mb-5">
                                        <label class="form-label" for="typeName">Nome no cartão</label>
                                        <input type="text" id="typeName" class="form-control form-control-lg" size="17" name="cc_name" />
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-5">
                                            <div class="form-outline">
                                                <label class="form-label" for="typeExp">Válido até</label>
                                                <input type="text" id="typeExp" class="form-control form-control-lg" name="cc_expired" size="7" id="exp" minlength="7" maxlength="7" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <div class="form-outline">
                                                <label class="form-label" for="typeText">CVV</label>
                                                <input type="text" id="typeText" class="form-control form-control-lg" name="cc_cvv" size="1" minlength="3" maxlength="3" />
                                            </div>
                                        </div>
                                    </div>

                                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit <a href="#!">obcaecati sapiente</a>.</p>

                                    <button type="submit" class="btn btn-primary btn-block btn-lg" style="background-color:#04A77A">Comprar</button>

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
