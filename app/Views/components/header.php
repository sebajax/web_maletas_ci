<!DOCTYPE html>

<style type="text/css">

    /* mobile navbar sidebar under lg breakpoint */
    @media (max-width: 992px) {
        body {
            padding-top: 55px;
        }
    }

</style>

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