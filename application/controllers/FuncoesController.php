<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyController
 *
 * @author guilherme
 */
trait FuncoesController {

    //put your code here

    public function render($view, $data = array()) {
        $this->load->view('admin/header');
        $this->load->view($view, $data);
        $this->load->view('admin/footer');
    }

}
