<?php

class Ler_banco extends CI_Model {

        public function listar () {
            $this->db->select("nome,email,telefone,grupo");
            //filtrando o conteúdo selecionado
            
            return $this->db->get("cadastro")-> result_array();
            //Conectando e acessando informações do banco de dados
            //Como também realizando um get delas, convertendo-os em array)
         }

}