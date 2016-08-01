<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Caricaturas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->output->enable_profiler(TRUE);
        $this->load->model('admin/clientes_model');
        $this->load->library("email");
    }

    public function index() {
        $clientes = $this->clientes_model->visualizar();

        $this->load->toten("/toten/caricaturas/index.php", compact('clientes'));
    }

    public function editar() {
        $dados = $this->input->post();
        $id_cliente = $dados['id_cliente'];
        if ($dados != null) {
            $this->clientes_model->alterar($dados);

            $this->load->toten("/toten/caricaturas/questionario.php", compact('id_cliente'));
        }
    }

    public function cadastro($id_clinte) {

        $cliente = $this->clientes_model->visualizar_id($id_clinte);

        $this->load->toten("/toten/caricaturas/cadastro.php", compact('cliente'));
    }

    public function enquete_save() {
        $dados = $this->input->post();
        if ($dados != null) {
            $this->load->model('admin/enquetes_model');
            $this->enquetes_model->save($dados);
            $id_cliente = $dados['cliente_id'];
            $cliente = $this->clientes_model->visualizar_id($id_cliente);

            $this->load->toten("/toten/caricaturas/questionario2.php", compact('cliente'));
        }
    }
    
     public function enquete_save2() {
        $dados = $this->input->post();
        if ($dados != null) {
            $this->load->model('admin/enquetes_model');
            $this->enquetes_model->atualizar($dados);
            $id_cliente = $dados['cliente_id'];
            $cliente = $this->clientes_model->visualizar_id($id_cliente);

            $this->load->toten("/toten/caricaturas/questionario3.php", compact('cliente'));
        }
    }
    
     public function enquete_save3() {
        $dados = $this->input->post();
        if ($dados != null) {
            $this->load->model('admin/enquetes_model');
            $this->enquetes_model->atualizar($dados);
            $id_cliente = $dados['cliente_id'];
            $cliente = $this->clientes_model->visualizar_id($id_cliente);

            $this->load->toten("/toten/caricaturas/compartilhar.php", compact('cliente'));
        }
    }

    public function compartilhar() {

        $dados = $this->input->post();
        //debbug($dados);
        $this->load->library('email');
        
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);

        $this->email->from('guisedassari@gmail.com', 'Guilherme');
        $this->email->to('guisedassari@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

        

        $this->session->set_flashdata("success", "Email enviado com sucesso");
        redirect("toten");
    }

}
