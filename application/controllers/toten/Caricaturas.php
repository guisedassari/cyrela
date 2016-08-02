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
    
    public function pesquisa() {
        $nome = $this->input->post('pesquisa');
         $cliente = $this->clientes_model->search($nome);
        if ($cliente == null) {
             $this->session->set_flashdata("danger", "Nenhuma caricatura encontrada com esse nome");
         redirect('/toten');
        }
        $this->load->toten("/toten/caricaturas/pesquisa.php", compact('cliente'));
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
        //xdebbug($dados);
        $this->load->library('email');

        $subject = 'Cyrela Caricatura';
        $message = img(array("src" => base_url("uploads/" . $dados["caricatura"])));

        // Get full html:
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
             <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
            <title>' . html_escape($subject) . '</title>
            <style type="text/css">
             body {
                 font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;
             }
            </style>
        </head>
        <body>
        ' . $message . '
        </body>
        </html>';


        $result = $this->email
                ->from('rjzcyrela@querovivernesserio.com.br')
                /* ->reply_to('guisedassari@gmail.com')   */ // Optional, an account where a human being reads.
                ->to($dados['email'])
                ->subject($subject)
                ->message($body)
                ->send();
        redirect('/toten');
    }

}
