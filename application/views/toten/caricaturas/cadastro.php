<?php
echo form_open_multipart('toten/caricaturas/editar', array('rule' => 'form', 'class' => 'form_add'));
echo form_hidden('id_cliente', $cliente->id_cliente);
echo div_open('col-md-6');
echo form_label('Nome');
echo form_input(array('class' => 'form-control', 'required' => 'true','name' => 'nome', 'id' => 'nome', 'value' => $cliente->nome, 'autofocus' => 'true'));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();

echo div_open('col-md-6');
echo form_label('Sobrenome');
echo form_input(array('class' => 'form-control', 'required' => 'true','name' => 'sobrenome'));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();

echo div_open('col-md-12');
echo form_label('email');
echo form_input(array('class' => 'form-control', 'required' => 'true','type' => 'email','name' => 'email'));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();

echo div_open('col-md-12');
echo form_label('Cidade');
echo form_input(array('class' => 'form-control', 'required' => 'true','name' => 'cidade'));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();

echo div_open('col-md-12');
echo form_label('Telefone');
echo form_input(array('class' => 'form-control', 'required' => 'true','type' => 'tel','name' => 'telefone'));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();

echo div_open('col-md-12');
echo form_label('DESEJO RECEBER NOVIDADES DA CYRELA.', 'newsletter');
$data = array(
    'name' => 'newsletter',
    'id' => 'newsletter',
    'value' => 'sim',
    'checked' => TRUE,
    'style' => 'margin:10px'
);
echo form_checkbox($data);
echo div_close();

echo div_open('col-md-12 text-right');
echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar'));
echo div_close();

echo form_close();
?>


                      