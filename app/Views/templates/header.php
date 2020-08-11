<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Transportes Oliveros">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Sebastian I">
        <?= csrf_meta(); ?>

        <title>Transportes Oliveros</title>

        <link rel="shortcut icon" type="image/png" href="<?=base_url()?>/favicon.png"/>

        <!-- BOOTSTRAP - Load css files -->
        <link href="<?= base_url('resources/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- FONTAWESOME -> Load css files-->
        <link href="<?php echo base_url('resources/font-awesome/css/all.min.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- APP - Load css files -->
        <link href="<?= base_url('resources/css/App.css'); ?>" rel="stylesheet" type="text/css" />

        <script src="<?= base_url('resources/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('resources/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('resources/js/jquery.validate.min.js'); ?>"></script>
        <script src="<?= base_url('resources/js/es_messages.js'); ?>"></script>

        <script type="text/javascript">
            $(function () {

                jQuery.validator.setDefaults({
                    errorElement: 'span',
                    errorClass: 'is-invalid',
                    validClass: 'is-valid', 

                    errorPlacement: function (error, element) {
                        error.addClass('invalid-feedback');
                        error.insertAfter(element);
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
            }); 
        </script>
    </head>

    <body>
        <section id="top">
            <div>
                <nav class="navbar navbar-expand-lg navbar-dark header fixed-top">
                    <a class="navbar-brand text-white" href="<?= base_url() ?>">
                        <i class="fas fa-suitcase-rolling fa-2x mr-3"></i>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarHeader">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                            <li class="nav-item desktop_services">
                                <a class="nav-link" href="#nuestro_servicio"> 
                                    <i class="fas fa-truck fa-1x mr-2"></i>
                                    <span class="text-white"> Nuestro servicio </span> 
                                </a>
                            </li>
                            <li class="nav-item desktop_services">
                                <a class="nav-link" href="#quienes_somos"> 
                                    <i class="fas fa-comment fa-1x mr-2"></i>
                                    <span class="text-white"> Quienes somos </span> 
                                </a>
                            </li>
                            <li class="nav-item desktop_services">
                                <a class="nav-link" href="#mision"> 
                                    <i class="fas fa-handshake fa-1x mr-2"></i>
                                    <span class="text-white"> Misión </span>
                                </a>
                            </li>
                            <li class="nav-item desktop_services">
                                <a class="nav-link" href="#contactenos"> 
                                    <i class="fas fa-envelope fa-1x mr-2"></i>
                                    <span class="text-white"> Contáctenos </span>
                                </a>
                            </li>
                        </ul>
                        <div></div>
                    </div>
                </nav>
            </div>
        </section>