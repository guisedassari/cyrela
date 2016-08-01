<div class="formulario-questionario">
    <?php
    echo form_open('toten/caricaturas/enquete_save3');
    echo form_hidden('cliente_id', $cliente->id_cliente);

    echo div_open('col-md-6 col-md-offset-3');
    echo form_label('Em que região deseja comprar um imóvel?');
    echo '<br><br>';
    echo form_radio('pergunta3', 'Barra da Tijuca / Recreio') . "" . form_label('Barra da Tijuca / Recreio');
    echo '<br>';
    echo form_radio('pergunta3', 'Zona Oeste') . "" . form_label('Zona Oeste');
    echo '<br>';
    echo form_radio('pergunta3', 'Zona Norte') . "" . form_label('Zona Norte');
    echo '<br>';
    echo form_radio('pergunta3', 'Zona Sul') . "" . form_label('Zona Sul');
    echo '<br>';
    

    echo div_open('col-md-12 text-right');
    echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Enviar'));
    echo div_close();
    echo div_close();
    ?>

</div>