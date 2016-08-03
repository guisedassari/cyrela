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
        <div class="col-md-8">
            <?php echo anchor('/toten', '<i class="fa fa-sign-out" aria-hidden="true"></i> Voltar ao inicio', array('class' => 'btn btn-azul'));
            echo '&nbsp;';
            ?>
        </div>
        <div class="col-md-2 text-right">
            <button type="button" class="btn btn-email" data-toggle="modal" data-target="#exampleModal<?= $cliente->id_cliente; ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Email</button>
<?php include 'modal_email.php'; ?>
        </div>

        <div class="col-md-2">
            <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div id="fb-root"></div>
            <div class="fb-share-button" data-href="http://querovivernesserio.com.br/caricaturas/uploads/<?= $cliente->caricatura; ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fquerovivernesserio.com.br%2Fcaricaturas%2Fuploads%2Fd24e870eac4516d737e2c28bbdfd4d80.png&amp;src=sdkpreparse">Compartilhar</a></div>
        </div>
    </div>
</div>
<script language="JavaScript">
    setTimeout('delayReload()', 60000);
    function delayReload()
    {
        if (navigator.userAgent.indexOf("MSIE") != -1) {
            history.go(0);
        } else {
            window.location = "http://localhost/cyrela/toten";
        }
    }
</script>
