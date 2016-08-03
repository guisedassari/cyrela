<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="">Caricaturas encontre a sua</h1>
        </div>
        <?php foreach ($clientes as $cliente) : ?>
            <!-- Button trigger modal -->
            <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                <a class="example-image-link thumbnail" href="<?= base_url() . 'toten/caricaturas/cadastro/' . $cliente['id_cliente'] ?>">
                    <?= img(array('src' => base_url("uploads/" . $cliente['caricatura']), 'class' => 'example-image')) ?>
                </a>
                <div class="legenda text-center">
                    <p><?= $cliente['nome'] . " " . $cliente['sobrenome']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>

        <script language="JavaScript">
        setTimeout('delayReload()', 20000);
            function delayReload()
            {
                if (navigator.userAgent.indexOf("MSIE") != -1) {
                    history.go(0);
                } else {
                    window.location.reload();
                }
            }
        </script>
    </div>
</div>




