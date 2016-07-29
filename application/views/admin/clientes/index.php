<?php

if (($this->session->flashdata('success'))) {
    echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
}elseif ($this->session->flashdata('danger')) {
    echo '<div class="alert alert-danger">'.$this->session->flashdata('danger').'</div>';
}

echo anchor('admin/clientes/clientes/add', '<i class="fa fa-plus" aria-hidden="true"></i> Adicionar', array('class' => 'btn btn-azul'));

$template = array(
    'table_open' => '<table class="table table-striped ">',
);

$this->table->set_template($template);
$this->table->set_heading('Caricatura','Nome', 'Sobrenome', 'Cidade', 'Telefone', 'NewsLetter','Ações', '');
foreach ($clientes as $cliente) {
    $this->table->add_row(
            img(array('src' => base_url("uploads/".$cliente['caricatura']), 'class' => 'caricatura')),
            $cliente['nome'], 
            $cliente['sobrenome'], 
            $cliente['cidade'], 
            $cliente['telefone'], 
            $cliente['newsletter'], 
            anchor("admin/clientes/clientes/edit/{$cliente['id_cliente']}", '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-azul')),
            anchor("admin/clientes/clientes/delete/{$cliente['id_cliente']}/{$cliente['caricatura']}", '<i class="fa fa-trash" aria-hidden="true"></i>', array('class' => 'btn btn-danger'))
            ); 
}
echo $this->table->generate();









