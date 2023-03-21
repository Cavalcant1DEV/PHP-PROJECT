<?php 

class Inserir_cadastro extends CI_Model {

    public function insert_cadastro ($dados) {
        
        return $this->db->insert('cadastro', $dados);
        //inserindo na tabela cadastro o array contido em $dados
    }
}