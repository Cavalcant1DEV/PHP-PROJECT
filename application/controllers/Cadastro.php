<?php

class Cadastro extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inserir_cadastro');
        //Carregando a model dentro do controller
    }

    public function index()
    {
        $informacoes['Cadastro_geral'] = $this->Inserir_cadastro->listar();
        //Buscando uma função especifica dentro do controller importado

        //var_dump($informacoes);
        //Impressão básica

        $this->template->load('templates/temp1', 'pages/main');
        //Carregando configurações de template
    }

    public function cadastrar()
    {
        $cadastrar = $this->input->post();
        //informamos que a variável cadastrar recebe dados do tipo post, em algum input, 
        //fazendo que ela receba as informações do array do formulário

        //echo json_encode($cadastrar);
        //impressão básica v2
        $dados = ["nome" => $cadastrar['nome'], "email" => $cadastrar['email'], "telefone" => $cadastrar['telefone'], "grupo" => $cadastrar['grupo']];
        //Criando um array na ordem das informações do banco de dados 

        $this->Inserir_cadastro->insert_cadastro($dados);
        //enviando os dados armazenados em cadastrar para a model, passando-o como parâmetro da nossa função
        exit;
    }
}
