<?php
echo form_open_multipart('admin/clientes/clientes/do_upload ', array('rule' => 'form', 'class' => 'form_add'));

echo div_open('col-md-6');
echo form_label('Nome');
echo form_input(array('class' => 'form-control', 'name' => 'nome', 'id' => 'nome', set_value('nome'), 'autofocus' => 'true'));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();




echo div_open('col-md-6');
echo form_label('Caricatura (2MB)');
echo form_upload(array('class' => 'form-control', 'name' => 'caricatura'));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo div_close();


echo div_open('col-md-12 text-right');
echo form_button(array('class'=> 'btn btn-azul','type' => 'submit','content'=> '<i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar'));
echo div_close();

echo form_close();
