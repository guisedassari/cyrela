<?php

if (($this->session->flashdata('success'))) {
    echo '<p class="alert alert-success">'.$this->session->flashdata('success').'</p>';
}

echo anchor('clientes/add', '<i class="fa fa-plus" aria-hidden="true"></i> Adicionar', array('class' => 'btn btn-azul'));

$template = array(
    'table_open' => '<table class="table table-striped">',
);

$this->table->set_template($template);

$this->table->set_heading('Nome', 'Sobrenome', 'Cidade', 'Telefone', 'NewsLetter', 'Status','Ações', '');
foreach ($clientes as $cliente) {
    $this->table->add_row($cliente['nome'], 
            $cliente['sobrenome'], 
            $cliente['cidade'], 
            $cliente['Telefone'], 
            $cliente['newsletter'], 
            $cliente['status'],
            anchor("admin/clientes/edit/{$cliente['id_curso']}", '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-primary')),
            anchor("admin/clientes/deleta/{$cliente['id_curso']}", '<i class="fa fa-trash" aria-hidden="true"></i>', array('class' => 'btn btn-danger'))
                    ); 
}
echo $this->table->generate();









