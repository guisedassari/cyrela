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
    
    public function caricaturas() {

        $clientes = $this->clientes_model->visualizar();

        $this->load->templete('admin/clientes/caricaturas.php', compact('clientes'));
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

    public function delete($id_cliente, $caricatura) {
        $this->load->helper("deleta_arquivo");
        $this->clientes_model->deletar($id_cliente);
        $this->session->set_flashdata("success", "Curso deletado com sucesso");
        redirect('admin/clientes/clientes');
    }

    public function do_upload() {

        $caricatura = 'caricatura';
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 2000;
        $config['max_height'] = 2000;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($caricatura)) {
            //$error = $this->upload->display_errors('<p>', '</p>');
            $this->session->set_flashdata("danger", 'Erro ao gravar caricatura tente novamente mais tarde');
            redirect('admin/clientes/clientes');
        } else {
            $teste = $this->input->post();
            $teste2 = ['caricatura' => $this->upload->data('file_name')];
            $dados = array_merge($teste, $teste2);
            if ($dados != null) {
                $this->clientes_model->salvar($dados);
                $this->session->set_flashdata("success", "Cliente cadastrado com sucesso");
                redirect('admin/clientes/clientes');
            }
        }
    }

    public function do_upload_alterar() {
        $caricatura = $_FILES;
        if ($caricatura['caricatura']['tmp_name'] != null) {
            $caricatura = 'caricatura';
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $config['max_width'] = 2000;
            $config['max_height'] = 2000;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if (!$this->upload->do_upload($caricatura)) {
                $this->session->set_flashdata("danger", 'Erro ao gravar caricatura tente novamente mais tarde');
                redirect('admin/clientes/clientes');
            } else {
                $teste = $this->input->post();
                $teste2 = ['caricatura' => $this->upload->data('file_name')];
                $dados = array_merge($teste, $teste2);

                if ($dados != null) {
                    $this->clientes_model->alterar($dados);
                    $this->session->set_flashdata("success", "Cliente alterados com sucesso");
                    redirect('admin/clientes/clientes');
                }
            }
        }
        $dados = $this->input->post();
        if ($dados != null) {
            $this->clientes_model->alterar($dados);
            $this->session->set_flashdata("success", "Cliente alterados com sucesso");
            redirect('admin/clientes/clientes');
        }
    }

}
