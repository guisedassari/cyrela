<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/clientes_model');
    }

    public function index() {

        $clientes = $this->clientes_model->visualizar();

        $this->load->templete('admin/clientes/index.php', compact('clientes'));
    }

    public function add() {

        $dados = $this->input->post();
        
        if ($dados != null) {
            //debbug($dados);
            $this->clientes_model->salvar($dados);
            $this->session->set_flashdata("success", "Cliente cadastrado com sucesso");
            redirect('/');
        }
        $this->load->templete('admin/clientes/add.php');
    }
    
    public function edit($id_cliente) {
        if ($id_cliente != null) {
            $cliente = $this->clientes_model->visualizar_id($id_cliente);
            $this->load->templete("admin/clientes/edit.php", compact("cliente"));
        } else {
            redirect('/');
        }
    }

}
