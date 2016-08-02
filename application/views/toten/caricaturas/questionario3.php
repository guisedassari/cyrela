<div class="formulario-questionario">
    <?php
    echo form_open('toten/caricaturas/enquete_save3');
    echo form_hidden('cliente_id', $cliente->id_cliente);

    echo div_open('col-md-6 col-md-offset-3');
    echo div_open('pergunta');
    echo form_label('Em que região deseja comprar um imóvel?');
    echo div_close();
    echo '<br>';
    echo form_radio('pergunta3', 'Barra da Tijuca / Recreio', FALSE, ['id' => 'teste1', 'required' => 'required']) . "" . form_label('Barra da Tijuca / Recreio', 'teste1');
    echo '<br>';
    echo form_radio('pergunta3', 'Zona Oeste', FALSE, ['id' => 'teste2']) . "" . form_label('Zona Oeste', 'teste2');
    echo '<br>';
    echo form_radio('pergunta3', 'Zona Norte', FALSE, ['id' => 'teste3']) . "" . form_label('Zona Norte', 'teste3');
    echo '<br>';
    echo form_radio('pergunta3', 'Zona Sul', FALSE, ['id' => 'teste4']) . "" . form_label('Zona Sul', 'teste4');
    echo '<br>';

    echo div_open('col-md-12 text-right');
    echo anchor('/toten', '<i class="fa fa-sign-out" aria-hidden="true"></i> Voltar ao inicio', array('class' => 'btn btn-azul'));
    echo '&nbsp;';
    echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Enviar'));
    echo div_close();
    echo div_close();
    ?>

</div>