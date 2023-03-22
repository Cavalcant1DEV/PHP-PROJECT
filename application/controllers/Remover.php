<?php

class Remover extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('remover_cadastro');
        //Carregando a model dentro do controller
    }

    public function deletar(){
        $id = $this->input->post();
        $retorno = $this->remover_cadastro->apagar_linha($id['id']);
        
        echo json_encode($retorno);
    }
}