<?php

class Clientes_model extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
    
     public function visualizar() {
        return $this->db->get('clientes')->result_array();
    }

    public function visualizar_id($id_cliente = null) {
        return $this->db->get_where('clientes', array('id_cliente' => $id_cliente))->row();
    }

    public function salvar($dados = null) {
        if ($dados != null) {
            $this->db->insert('clientes', $dados);
        }
    }
   

}
