<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Caricaturas extends CI_Controller {
    public function index() {
         $this->load->view("/toten/header.php");
         $this->load->view("/toten/index.php");
         $this->load->view("/toten/footer.php");
    }

}
