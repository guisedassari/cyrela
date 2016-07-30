<?php
echo form_open('toten/caricaturas/enquete_save');
echo form_hidden('cliente_id', $id_cliente);

echo div_open('col-md-4');
echo form_label('Região onde mora?');
echo '<br>';
echo form_radio('pergunta1', 'Barra da Tijuca / Recreio')."". form_label('Barra da Tijuca / Recreio');;
echo '<br>';
echo form_radio('pergunta1', 'Zona Oeste')."". form_label('Zona Oeste');
echo '<br>';
echo form_radio('pergunta1', 'Zona Norte')."". form_label('Zona Norte');
echo '<br>';
echo form_radio('pergunta1', 'Zona Sul')."". form_label('Zona Sul');
echo '<br>';
echo form_radio('pergunta1', 'Fora do Rio')."". form_label('Fora do Rio');
echo '<br>';
echo div_close();

echo div_open('col-md-4');
echo form_label('Tem interesse em comprar um imóvel nos próximos:');
echo '<br>';
echo form_radio('pergunta2', '06 meses')."". form_label('06 meses');
echo '<br>';
echo form_radio('pergunta2', '01 ano')."". form_label('01 ano');
echo '<br>';
echo form_radio('pergunta2', '02 anos')."". form_label('02 anos');
echo '<br>';
echo form_radio('pergunta2', 'Não tem interesse.')."". form_label('Não tem interesse.');
echo '<br>';
echo div_close();

echo div_open('col-md-4');
echo form_label('Em que região deseja comprar um imóvel?');
echo '<br>';
echo form_radio('pergunta3', 'Barra da Tijuca / Recreio')."". form_label('Barra da Tijuca / Recreio');
echo '<br>';
echo form_radio('pergunta3', 'Zona Oeste')."". form_label('Zona Oeste');
echo '<br>';
echo form_radio('pergunta3', 'Zona Norte')."". form_label('Zona Norte');
echo '<br>';
echo form_radio('pergunta3', 'Zona Sul')."". form_label('Zona Sul');
echo '<br>';
echo div_close(); 

echo div_open('col-md-12 text-right');
echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Enviar'));
echo div_close();