<div class="formulario-questionario">
    <?php
//xdebbug($cliente);
    echo form_open('toten/caricaturas/enquete_save2');
    echo form_hidden('cliente_id', $cliente->id_cliente);
    echo div_open('col-md-6 col-md-offset-3');
    echo div_open('pergunta');
    echo form_label('Tem interesse em comprar um imóvel nos próximos:');
    echo div_close();
    echo '<br>';
    echo form_radio('pergunta2', '06 meses', FALSE, ['id' => 'teste1', 'required' => 'required']) . "" . form_label('06 meses', 'teste1');
    echo '<br>';
    echo form_radio('pergunta2', '01 ano', FALSE, ['id' => 'teste2']) . "" . form_label('01 ano', 'teste2');
    echo '<br>';
    echo form_radio('pergunta2', '02 anos', FALSE, ['id' => 'teste3']) . "" . form_label('02 anos', 'teste3');
    echo '<br>';
    echo form_radio('pergunta2', 'Não tem interesse.', FALSE, ['id' => 'teste4']) . "" . form_label('Não tem interesse.', 'teste4');
    echo '<br>';


    echo div_open('col-md-12 text-right');
    echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Enviar'));
    echo div_close();
    echo div_close();
    ?>
</div>