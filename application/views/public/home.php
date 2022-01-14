<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 21/01/2018
 * Time: 2:12 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$this->layout('public/public_master');
?>


<?php $this->start('css_p') ?>
<?php $this->stop() ?>

<?php $this->start('page_content') ?>
    <div id="banner_container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/ui/public/images/slides/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/ui/public/images/slides/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/ui/public/images/slides/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="home_title text-uppercase"> Venta, Fabricación e Instalación <br/>
                    <small class="text-muted text-lowercase">de Malla Galvanizada, Razor Ribbon, Privacinta, Euro-reja,
                        Portones eléctricos.
                    </small>
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <div class="card" style="">
                    <img src="/ui/public/images/fp_1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Malla Galvanizada</h5>
                        <p class="card-text">La malla metálica está recubierta repetidamente con zinc para sellar la
                            malla y protegerla del óxido y la corrosión</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card" style="">
                    <img src="/ui/public/images/fp_2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Malla forrada en PVC</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card" style="">
                    <img src="/ui/public/images/fp_3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reja Estilo Europeo</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card" style="">
                    <img src="/ui/public/images/fp_4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Razor Ribon</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card" style="">
                    <img src="/ui/public/images/fp_5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Barandas y pasamanos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="parallax_1h">
        <h1 id="parallax_title"><span class="align-middle">Estamos listos para cumplir todas sus necesidades de seguridad</span>
        </h1>
    </div>
    <div id="quality_container">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <div class="icon_container">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="quality_t">Calidad</h3>
                    <p>
                        Some quick example text to build on the card title and make up the bulk of
                    </p>
                </div>
                <div class="col-12 col-md">
                    <div class="icon_container">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h3 class="quality_t">Experiencia</h3>
                    <p>
                        Some quick example text to build on the card title and make up the bulk of
                    </p>
                </div>
                <div class="col-12 col-md">
                    <div class="icon_container">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="quality_t">Seguridad</h3>
                    <p>
                        Some quick example text to build on the card title and make up the bulk of
                    </p>
                </div>
            </div>
        </div>
    </div>
<div id="contacto_container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <h2 class="home_title text-uppercase"> Contacto </h2>
                <form>
                    <div class="mb-3">
                        <label for="input_nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="input_nombre">
                    </div>
                    <div class="mb-3">
                        <label for="input_email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="input_email">
                    </div>
                    <div class="mb-3">
                        <label for="input_telefono" class="form-label">Teléfono</label>
                        <div class="input-group">
                            <div class="input-group-text">+502</div>
                            <input type="tel" class="form-control" id="input_telefono" min-value="8" max-value="8">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="input_mensaje" class="form-label">Información solicitada</label>
                        <textarea  class="form-control" id="input_mensaje"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->stop() ?>
<?php $this->start('js_p') ?>

<?php $this->stop() ?>