<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Transportes Oliveros">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Sebastian I">

        <title>Transportes Oliveros</title>

        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

        <!-- APP - Load css files -->
        <link href="<?= base_url('resources/css/App.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- BOOTSTRAP - Load css files -->
        <link href="<?= base_url('resources/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- FONTAWESOME -> Load css files-->
        <link href="<?php echo base_url('resources/font-awesome/css/all.min.css'); ?>" rel="stylesheet" type="text/css" />

        <script src="<?= base_url('resources/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('resources/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    </head>

    <body>

        <?= $this->include('components/header') ?>

        <div class="container text-center">
            <img src="<?= base_url('resources/images/logo.png'); ?>" alt="Transportes Oliveros" width="70%" />
        </div>

    </body>

    <footer>

    </footer>
</html>