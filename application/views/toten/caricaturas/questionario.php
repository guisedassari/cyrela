<div class="formulario-questionario">
    <?php
    echo form_open('toten/caricaturas/enquete_save');
    echo form_hidden('cliente_id', $id_cliente);

    echo div_open('col-md-6 col-md-offset-3');
    echo form_label('Região onde mora?');
      echo '<br><br>';
    echo form_radio('pergunta1', 'Barra da Tijuca / Recreio') . "" . form_label('Barra da Tijuca / Recreio');
    echo '<br>';
    echo form_radio('pergunta1', 'Zona Oeste') . "" . form_label('Zona Oeste');
    echo '<br>';
    echo form_radio('pergunta1', 'Zona Norte') . "" . form_label('Zona Norte');
    echo '<br>';
    echo form_radio('pergunta1', 'Zona Sul') . "" . form_label('Zona Sul');
    echo '<br>';
    echo form_radio('pergunta1', 'Fora do Rio') . "" . form_label('Fora do Rio');
    echo '<br>';
    echo div_open('text-right');
    echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Enviar'));
    echo div_close();
    echo div_close();
    ?>
</div>
