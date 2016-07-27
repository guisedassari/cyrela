<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/clientes_model');
        $this->load->library('upload');
    }

    public function index() {

        $clientes = $this->clientes_model->visualizar();

        $this->load->templete('admin/clientes/index.php', compact('clientes'));
    }

    public function add() {

        $dados = $this->input->post();

        if ($dados != null) {
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

    public function editar() {
        $dados = $this->input->post();
        if ($dados != null) {
            $this->clientes_model->alterar($dados);
            $this->session->set_flashdata("success", "Cliente alterados com sucesso");
            redirect('admin/clientes/clientes');
        }
    }

     public function do_upload()
        {
         //debbug($_FILES['userfile']);
         $userfile = $_FILES['userfile'];
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 26937;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        echo 'erro';

                        
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                       echo 'sucesso';
                }
        }

}
