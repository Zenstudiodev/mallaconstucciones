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
<body>
<div id="top_header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-10">
                <p>
                    <a class="navbar-brand" href="<?php echo base_url();?>">
                        <img id="logo_main" src="/ui/public/images/logo.jpg" alt="Malla Construcciones de Guatemala">
                    </a>
                    <a href="https://wa.me/50242734205" target="_blank"><i class="fab fa-whatsapp"></i> 4273-4205 |</a>
                    <a href="tel:+50224351508"><i class="fas fa-phone"></i> 2435-1508 |</a>
                    <a href="tel:+50222306151"><i class="fas fa-phone"></i> 2230-6151    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </a>
                    <a href="https://www.waze.com/en/live-map/directions?latlng=14.661567974067776%2C-90.58991432189943" target="_blank" class="align-right" > 15 Av. 10-79 Zona 6 de Mixco, Guatemala</a>

                </p>
            </div>
        </div>
    </div>

</div>


</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light  sticky-top ">
    <!--<div id="nav_container">-->
        <div class="container-fluid" id="nav_container">
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


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P6CR2QYPQW"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-P6CR2QYPQW');
</script>
<!-- JS personalizado -->
<?php echo $this->section('js_p') ?>
</body>




</html>
