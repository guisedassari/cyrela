<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    use FuncoesController;

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/clientes_model');
    }

    public function index() {

        $clientes = $this->clientes_model->visualizar();

        $this->render('admin/clientes/index.php', array($clientes));
    }

    public function add() {

        $dados = $this->input->post();
        if ($dados != null) {
            $this->clientes_model->salvar($dados);
            $this->session->set_flashdata("success", "Cliente cadastrado com sucesso");
            redirect('/');
        }
        $this->load->view('admin/header');
        $this->load->view('admin/clientes/add.php');
        $this->load->view('admin/footer');
    }

}
