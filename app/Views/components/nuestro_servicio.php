<?php $parser = \Config\Services::parser(); ?>

<!DOCTYPE html> 
<div class="container-fluid">
    <div class="row justify-content-center">
        <?php
            $data = [
                'title' => 'Cumplimiento',
                'body'  => 'Personal con vasta experiencia, lo que permite que siempre lleguemos a nuestro destino.',
                'icon'  => 'fa-clipboard-check'
            ];
            echo $parser->setData($data)->render('components/nuestro_servicio_card');
        ?>
        <?php
            $data = [
                'title' => 'Rapidez',
                'body'  => 'Entregamos tu carga en el menor tiempo.',
                'icon'  => 'fa-shipping-fast'
            ];
            echo $parser->setData($data)->render('components/nuestro_servicio_card');
        ?>
        <?php
            $data = [
                'title' => 'Monitoreo',
                'body'  => 'Control de la carga durante todo su trayecto hasta ser entregado.',
                'icon'  => 'fa-map-marker-alt'
            ];
            echo $parser->setData($data)->render('components/nuestro_servicio_card');
        ?>
    </div>
</div>