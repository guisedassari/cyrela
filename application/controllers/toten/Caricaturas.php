<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Caricaturas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/clientes_model');
    }

    public function index() {
        $clientes = $this->clientes_model->visualizar();

        $this->load->view("/toten/header.php");
        $this->load->view("/toten/caricaturas/index.php", compact('clientes'));
        $this->load->view("/toten/footer.php");
    }

    public function editar() {
        $dados = $this->input->post();
        $id_cliente = $dados['id_cliente'];
        if ($dados != null) {
            $this->clientes_model->alterar($dados);
            $this->load->view("/toten/header.php");
            $this->load->view("/toten/caricaturas/questionario.php", compact('id_cliente'));
            $this->load->view("/toten/footer.php");
        }
    }

    public function cadastro($id_clinte) {

        $cliente = $this->clientes_model->visualizar_id($id_clinte);

        $this->load->view("/toten/header.php");
        $this->load->view("/toten/caricaturas/cadastro.php", compact('cliente'));
        $this->load->view("/toten/footer.php");
    }

    public function enquete_save() {
        $dados = $this->input->post();
        if ($dados != null) {
            $this->load->model('admin/enquetes_model');
            $this->enquetes_model->save($dados);
            $id_cliente = $dados['cliente_id'];

            $this->load->view("/toten/header.php");
            $this->load->view("/toten/caricaturas/compartilhar.php", compact('id_cliente'));
            $this->load->view("/toten/footer.php");
        }
    }
    
    public function compartilhar() {
        $this->load->view("/toten/caricaturas/teste.php");
    }

}
