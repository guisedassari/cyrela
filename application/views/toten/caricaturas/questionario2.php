<div class="formulario-questionario">
<?php
//xdebbug($cliente);
echo form_open('toten/caricaturas/enquete_save2');
echo form_hidden('cliente_id', $cliente->id_cliente);
echo div_open('col-md-6 col-md-offset-3');
echo form_label('Tem interesse em comprar um imóvel nos próximos:');
    echo '<br><br>';
echo form_radio('pergunta2', '06 meses')."". form_label('06 meses');
echo '<br>';
echo form_radio('pergunta2', '01 ano')."". form_label('01 ano');
echo '<br>';
echo form_radio('pergunta2', '02 anos')."". form_label('02 anos');
echo '<br>';
echo form_radio('pergunta2', 'Não tem interesse.')."". form_label('Não tem interesse.');
echo '<br>';


echo div_open('col-md-12 text-right');
echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Enviar'));
echo div_close();
echo div_close();
?>
</div>