<?php

class Visualizar extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ler_banco');
        //Carregando a model dentro do controller
    }

    public function carregar_view(){

        $this->template->load('templates/temp1','pages/view_page');
        //função para carregar a view
    }

    public function visualizar_conteudos() 
    {
        $ver_dados = $this->ler_banco->listar();
        //Variável de conversão de dados do banco para json

        echo json_encode($ver_dados);

    }
}