<?php 
    $parser = \Config\Services::parser(); 
    $view = \Config\Services::renderer();
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Transportes Oliveros">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Sebastian I">

        <title>Transportes Oliveros</title>

        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

        <!-- BOOTSTRAP - Load css files -->
        <link href="<?= base_url('resources/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- FONTAWESOME -> Load css files-->
        <link href="<?php echo base_url('resources/font-awesome/css/all.min.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- APP - Load css files -->
        <link href="<?= base_url('resources/css/App.css'); ?>" rel="stylesheet" type="text/css" />

        <script src="<?= base_url('resources/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('resources/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('resources/js/jquery.form-validation.min.js'); ?>"></script>

        <script type="text/javascript">
            $(function () {
	            'use strict'
                $(document).on('click', 'a[href^="#"]', function (event) {
                    event.preventDefault();

                    $('html, body').animate({
                        scrollTop: $($.attr(this, 'href')).offset().top
                    }, 500);
                });

                $(document).on('blur', '[data-validator]', function () {
                    new Validator($(this));
                });      
            }); 
        </script>

    </head>

    <body>
        <section id="top">
            <?= $this->include('components/header') ?>
        </section>

        <div class="container text-center pt-5">
            <img src="<?= base_url('resources/images/logo.png'); ?>" alt="Transportes Oliveros" width="70%" />
        </div>

        <section id="nuestro_servicio">
            <?= $parser->setData(['title' => 'Nuestro Servicio'])->render('components/title'); ?>
            <?= $this->include('components/nuestro_servicio') ?>
        </section>

        <section id="quienes_somos">
            <?= $parser->setData(['title' => 'Quienes somos'])->render('components/title'); ?>
            <?=
                $view->setVar('title', 'quienes_somos')
                    ->setVar('img', base_url('resources/images/carretera.jpg'))
                    ->setVar('body', 'components/get_quienes_somos')
                    ->render('components/section');
            ?>
        </section>

        <section id="mision">
            <?= $parser->setData(['title' => 'Misión'])->render('components/title'); ?>
            <?=
                $view->setVar('title', 'mision')
                    ->setVar('img', base_url('resources/images/mision.jpg'))
                    ->setVar('body', 'components/get_mision')
                    ->render('components/section');
            ?>
        </section>

        <section id="contactenos">
            <?= $parser->setData(['title' => 'Contáctenos'])->render('components/title'); ?>
            <div class="container form_display">
                <form class="shadow p-3 mb-5 rounded">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="nombre_completo" placeholder="Nombre completo" data-validator="required">
                        <div class="invalid-feedback">Debe ingresar Nombre</div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="telefono" placeholder="Teléfono de contacto" data-validator="required|min:8">
                        <div class="invalid-feedback">Debe ingresar Teléfono</div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="email" placeholder="Email" data-validator="required|email">
                        <div class="invalid-feedback">Debe ingresar Email</div>
                    </div>

                    <div class="input-group mb-3">
                    <textarea class="form-control" rows="6" id="comentario" placeholder="Mensaje" data-validator="required|min:10"></textarea>
                        <div class="invalid-feedback">Debe ingresar Mensaje</div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary" type="button">Enviar mensaje</Button>
                    </div> 

                </form>
            </div>
        </section>

    </body>

    <footer class="footer">
        <?= $this->include('components/footer') ?>
    </footer>
</html>