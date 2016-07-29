<?php
class Enquetes_model extends CI_Model {
      public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
    
    public function save($dados = null) {
        if ($dados != null) {
            $this->db->insert('enquetes', $dados);
        }
    }
}