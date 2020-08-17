<?php 
    $parser = \Config\Services::parser(); 
    $view = \Config\Services::renderer();
?>

<script type="text/javascript">
    $(function () {
        const validator = $("#contacto_form").validate({
            rules: {
                nombre_completo: {
                    required: true,
                    minlength: 3
                },
                telefono: {
                    required: true,
                    minlength: 6
                },
                email: {
                    required: true,
                    email: true
                },
                comentario: {
                    required: true,
                    minlength: 10
                }
            },
            submitHandler: function (form, event) {
                event.preventDefault();
                const request = $(event.target).serializeArray();
                const jwt_token = $("input[name=jwt]").val();
                const csrf_token = '<?= csrf_hash(); ?>'
                $.ajax({
                    url: "<?= base_url('/sendMessage') ?>",
                    headers: {
                        'Authorization': 'Bearer ' + jwt_token,
                        '<?= csrf_header(); ?>': csrf_token
                    },
                    method: 'POST',
                    dataType: 'json',
                    data: request,
                })
                .done(function(response) {
                    showMessage("Mensaje enviado!", "alert-success");
                    $(form)[0].reset();
                })
                .fail(function(jqXHR) {
                    if(typeof jqXHR.responseJSON !== 'undefined') {
                        if(typeof jqXHR.responseJSON.messages !== 'undefined') {
                            showMessage(jqXHR.responseJSON.messages.error, "alert-danger");
                        }else {
                            showMessage("<?= ERROR_EMAIL; ?>", "alert-danger");
                        }
                    }else {
                        showMessage("<?= ERROR_EMAIL; ?>", "alert-danger");
                    }
                });
                validator.resetForm();
            }
        });
    }); 

</script>

    <input type="hidden" name="jwt" value="<?= $token; ?>" />

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

            <?= $view->render('components/message'); ?>

            <form id="contacto_form" class="shadow p-3 mb-5 rounded" method="post">

                <?= csrf_field() ?>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user-alt fa-1x"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="Nombre completo">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-phone-alt fa-1x"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono de contacto">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-envelope fa-1x"></i>
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