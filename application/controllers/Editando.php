<?php

class Editando extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('editar_cadastro_model');
    }

    public function load_page_editar($id){
        $id = ['id' => $id];
        $this->template->load('templates/temp1','pages/editando',$id);
    }

    public function editar(){
        $dados = $this->input->post();
        $this->editar_cadastro_model->editar($dados);
        redirect('visualizar/carregar_view');
    }
}