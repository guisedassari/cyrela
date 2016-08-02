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
    
    public function search($nome) {
        return $this->db->get_where('clientes', array('nome' => $nome))->row();
    }

    public function visualizar_id($id_cliente = null) {
        return $this->db->get_where('clientes', array('id_cliente' => $id_cliente))->row();
    }

    public function salvar($dados = null) {
        if ($dados != null) {
            $this->db->insert('clientes', $dados);
        }
    }
     public function alterar($dados = null) {
        if ($dados != null) {
            return $this->db->update('clientes', $dados, array('id_cliente' => $dados['id_cliente']));
        }
    }
    public function deletar($id_cliente = null) {
        return $this->db->delete('clientes', array('id_cliente' => $id_cliente));  // Produces: // DELETE FROM mytable  // WHERE id = $id
    }
}
