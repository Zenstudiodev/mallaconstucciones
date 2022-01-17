<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 21/01/2018
 * Time: 3:36 PM
 */
?>
<!doctype html>
<html lang="es">
<body>
<div id="top_header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <p>
                    <a href="https://wa.me/50242734205" target="_blank"><i class="fab fa-whatsapp"></i> 42734205 |</a>
                    <a href="tel:+50224351508"><i class="fas fa-phone"></i> 24351508 |</a>
                    <a href="tel:+50222306151"><i class="fas fa-phone"></i> 22306151</a>

                </p>
            </div>
            <div class="col">
                <p>15 Av. 10-79 Zona 6 de Mixco, Guatemala</p>
            </div>
        </div>
    </div>

</div>


</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light  sticky-top ">
    <!--<div id="nav_container">-->
        <div class="container-fluid" id="nav_container">
            <a class="navbar-brand" href="<?php echo base_url();?>">
                <img id="logo_main" src="/ui/public/images/logo.jpg" alt="Malla Construcciones de Guatemala">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Malla galvanizada</a></li>
                            <li><a class="dropdown-item" href="#">Malla Forrada en PVC</a></li>
                            <li><a class="dropdown-item" href="#">Reja Estilo Europeo</a></li>
                            <li><a class="dropdown-item" href="#">Razor Ribbon</a></li>
                            <li><a class="dropdown-item" href="#">Barandas y Pasamanos</a></li>

                        </ul>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#productos_container">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#quality_container">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto_container">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    <!--</div>-->
</nav>

<!-- Content Wrapper. Contains page content -->
<?php echo $this->section('page_content') ?>
<!-- /.content-wrapper -->
<footer>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <h4>Productos</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"
                    <a href="#">Malla Galvanizada</a></li>
                    <li class="list-group-item"><a href="#">Malla forrada en PVC</a></li>
                    <li class="list-group-item"><a href="#">Reja Estilo Europeo</a></li>
                    <li class="list-group-item"><a href="#">Razor Ribon</a></li>
                    <li class="list-group-item"><a href="#">Barandas y pasamanos</a></li>
                </ul>
            </div>
            <div class="col-12 col-md">
                <h4>Redes</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#"><i class="fab fa-facebook-square"></i> Facebook</a></li>
                    <li class="list-group-item"><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>


            </div>
            <div class="col-12 col-md">
                <h4>ubicacion</h4>
                <p>15 Av. 10-79 Zona 6 de Mixco, Guatemala</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18836.57664287253!2d-90.59237281487589!3d14.667886894598524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85899ff2c22433a9%3A0x1c7b8ce759376473!2sCol%20San%20Francisco%2C%20Cdad.%20de%20Guatemala!5e1!3m2!1ses!2sgt!4v1642096086976!5m2!1ses!2sgt"
                        style="border:0; width:100%; height:250px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col">
                <h4>Contato</h4>


                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="https://wa.me/50242734205" target="_blank"><i
                                    class="fab fa-whatsapp"></i> 42734205</a></li>
                    <li class="list-group-item"><a href="tel:+50224351508"><i class="fas fa-phone"></i> 24351508</a>
                    </li>
                    <li class="list-group-item"><a href="tel:+50222306151"><i class="fas fa-phone"></i> 22306151</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/ui/public/css/public.css" rel="stylesheet">
    <title>Malla Constucciones de Guatemala</title>
    <link rel="manifest" href="/manifest.json">
    <script src="https://kit.fontawesome.com/fd7d02f666.js" crossorigin="anonymous"></script>
</head>
</html>