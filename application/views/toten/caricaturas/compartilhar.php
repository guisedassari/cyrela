<?php
//xdebbug($cliente);
?>
<br>
<div class="col-md-10 col-md-offset-1 text-center">
    <?= img(array('src' => base_url("uploads/" . $cliente->caricatura), 'class' => 'img-compartilhar img-responsive')); ?>
    <br>
</div>

<div class="col-md-10 col-md-offset-1">
    <div class="row barra">
        <div class="col-md-6 text-left">
            <button type="button" class="btn btn-azul" data-toggle="modal" data-target="#exampleModal<?= $cliente->id_cliente; ?>" data-whatever="@getbootstrap"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</button>
            <?php include 'modal_email.php'; ?>
        </div>

        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-azul" data-toggle="modal" data-target="#exampleModal<?= $cliente->id_cliente; ?>" data-whatever="@getbootstrap"> <i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</button>
        </div>
    </div>
</div>