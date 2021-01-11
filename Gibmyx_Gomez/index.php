<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../assets/brand/logo-SF.png" alt="" width="240" height="200">
            <h2>Taller Medine 09/01/2021</h2>
        </div>

            <div class="col-12">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-9">
                            <label for="firstName" class="form-label">Operacion</label>
                            <input type="text" class="form-control" id="operacion" placeholder="" value="5+5" disabled>
                        </div>

                        <div class="col-sm-3">
                            <label for="lastName" class="form-label">Resultado</label>
                            <input type="text" class="form-control" id="resultado" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                <p>Este campo es requerido</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" id="btn-submit" onclick="validation()" type="submit">Comprobar Resultado</button>
                </form>
            </div>
            <br>
            <br>

            <div class="alert alert-primary d-none" id="correct" role="alert">
                El resultado es Correcto
            </div>

            <div class="alert alert-danger d-none" id="error" role="alert">
                El resultado es Incorrecto
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
    </footer>
</div>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/dist/js/axios.min.js"></script>
<script src="form-validation.js"></script>
</body>
</html>
