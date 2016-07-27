<?php
echo form_open('admin/clientes/clientes/edit', array('rule' => 'form', 'class' => 'form_add'));

echo div_open('col-md-6');
echo form_label('Nome');
echo form_input(array('class' => 'form-control', 'name' => 'nome', 'id' => 'nome', 'value' => $cliente->nome, 'autofocus' => 'true'));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();

echo div_open('col-md-6');
echo form_label('Sobrenome');
echo form_input(array('class' => 'form-control', 'name' => 'sobrenome', 'value' => $cliente->sobrenome));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();

echo div_open('col-md-6');
echo form_label('Cidade');
echo form_input(array('class' => 'form-control', 'name' => 'cidade', 'value' => $cliente->cidade));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();

echo div_open('col-md-6');
echo form_label('Telefone');
echo form_input(array('class' => 'form-control', 'name' => 'telefone', 'value' => $cliente->telefone));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();


echo div_open('col-md-6');
echo form_label('Status');
echo form_dropdown(array('class' => 'form-control','name' => 'status', ), array('ativo' => 'Ativo','inativo' => 'Inativo'), array($cliente->status));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();


echo div_open('col-md-6');
echo form_label('Caricatura');
echo form_upload(array('class' => 'form-control','name' => 'caricatura','value' => $cliente->caricatura));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();

echo div_open('col-md-6');
echo form_label('Newsletter', 'newsletter');
$data = array(
        'name'          => 'newsletter',
        'id'            => 'newsletter',
        'value'         => 'accept',
        'checked'       => $cliente->newsletter,
        'style'         => 'margin:10px'
);
echo form_checkbox($data);
echo div_close();

echo div_open('col-md-12 text-right');
echo form_button(array('class'=> 'btn btn-azul','type' => 'submit','content'=> '<i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar'));
echo div_close();

echo form_close();
