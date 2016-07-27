<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/usuarios_model');
    }

    public function index() {
        $this->load->view('admin/usuarios/login');
    }

    public function login() {
        $dados = $this->input->post();
        $usuario = $this->usuarios_model->validaUsuario($dados);
        if ($usuario) {
            $this->session->set_userdata('usuario_logado', $usuario);
            $this->session->set_flashdata("success", "Bem vindo");
            redirect('welcome');
            
        } else {
            $this->session->set_flashdata("danger", "Usuario ou senha invalidos");
            redirect('admin/usuarios');
        }
    }

    public function logout() {
        unset($_SESSION['usuario_logado']);
        redirect('admin/usuarios');
    }

}
