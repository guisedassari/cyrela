<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function templete($nome, $dados = null) {

        $this->view('admin/header.php');
        $this->view($nome, $dados);
        $this->view('admin/footer.php');
    }
    
    public function toten($nome, $dados = null) {

        $this->view('toten/header.php');
        $this->view($nome, $dados);
        $this->view('toten/footer.php');
    }

}
