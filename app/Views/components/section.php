<!DOCTYPE html>
<div class="jumbotron">
    <div class="container w-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-6"> 
                <img class="align-self-center rounded w-100" src=<?= esc($img) ?> alt=<?= $title ?> />
            </div>
            <div class="mt-5 col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-8"> 
                <?= $this->include($body) ?>
            </div>
        </div>
    </div>
</div>