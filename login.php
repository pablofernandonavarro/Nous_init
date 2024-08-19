<!DOCTYPE html>
<?php 
include("model/connection.php");?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="bg-light">
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-4 h-50">
        <div class="row d-flex justify-content-center align-items-center h-50" ">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="images\icon_image.png" class="rounded-circle img-fluid"
                                        style="width: 105px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Bienvenido a Nous :</h4>
                                </div>

                            <?php 
                            include("controller/login.php");?>

                                <form method="post" action="login.php">
                                  

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form2Example11" class="form-control" name="user"
                                            placeholder="" autofocus/>
                                        <label class="form-label" for="form2Example11">Usuario</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form2Example22" class="form-control" name="password"/>
                                        <label class="form-label" for="form2Example22">Contraseña</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar secion
                                            </button>
                                        <a class="text-muted" href="#!">Te olvidate la contraseña?</a>
                                    </div>



                                </form>

                            </div>
                        </div>
                        <div class="col-md-7 d-flex align-items-center gradient-custom-2">
                            <div class="w-100 h-100">
                                <img src="images\Stock_.png" class="w-100 h-100" style="object-fit: cover;" alt="Background Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>