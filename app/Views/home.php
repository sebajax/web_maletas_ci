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
        <script src="<?= base_url('resources/js/jquery.validate.min.js'); ?>"></script>

        <script type="text/javascript">
            $(function () {

                jQuery.validator.setDefaults({
                    errorElement: 'span',
                    errorClass: 'is-invalid',
                    validClass: 'is-valid', 

                    errorPlacement: function (error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.input-group').append(error);
                    },
                    highlight: function (element, errorClass, validClass) {
                        $(element).addClass(errorClass).removeClass(validClass);
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element).removeClass(errorClass).addClass(validClass);
                    }
                });         
                
	            $(document).on('click', 'a[href^="#"]', function (event) {
                    event.preventDefault();

                    $('html, body').animate({
                        scrollTop: $($.attr(this, 'href')).offset().top
                    }, 500);
                });

                $("#contacto_form").validate({
                    rules: {
                        nombre_completo: {
                            required: true
                        },
                        telefono: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        comentario: {
                            required: true
                        }
                    },
                    messages: {
                        nombre_completo: "Debe ingresar nombre"
                    },
                    submitHandler: function (form) {
                        alert('submiteo');
                        form.submit();
                    }
                });
/*
                $("#contacto_form").submit(function(event) {
                    event.preventDefault();
                    var data = $(this).serializeArray();
                    console.log(data);
                }); 

            }); 
*/
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
                <form id="contacto_form" class="shadow p-3 mb-5 rounded" method="post">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="Nombre completo">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono de contacto">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>

                    <div class="input-group mb-3">
                        <textarea class="form-control" rows="6" id="comentario" name="comentario" placeholder="Mensaje"></textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Enviar mensaje</Button>
                    </div> 

                </form>
            </div>
        </section>

    </body>

    <footer class="footer">
        <?= $this->include('components/footer') ?>
    </footer>
</html>