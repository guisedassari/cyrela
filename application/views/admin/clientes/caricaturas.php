<div class="row" >
    <?php
    foreach ($clientes as $cliente) :
        ?>
        <div class="col-xs-6 col-md-4" style="height: 300px;">
            <a href="#" class="thumbnail caricaturas">
                <?= img(array('src' => base_url("uploads/" . $cliente['caricatura']), 'class' => 'img-responsive')) ?>
            </a>
            <div class="text-center">
            <?=$cliente['nome'];?>
            </div>
        </div>
        <?php
    endforeach;
    ?>
</div>
