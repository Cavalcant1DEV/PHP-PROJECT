<?php 

class Inserir_cadastro extends CI_Model {

    public function listar () {

       return $this->db->get("cadastro")-> result_array();
       //Conectando e acessando informações do banco de dados
       //Como também realizando um get delas, convertendo-os em array)
    }

    public function insert_cadastro ($dados) {
        // $inserir = $this->db->conn_id->prepare("INSERT INTO cadastro (nome,email,telefone,grupo) VALUES (:NOME,:EMAIL,:TELEFONE,:GRUPO)");
        
        // $inserir->bindValue(':NOME',$dados['nome'],PDO::PARAM_STR);
        // $inserir->bindValue(':TELEFONE',$dados['telefone'],PDO::PARAM_STR);
        // $inserir->bindValue(':EMAIL',$dados['email'],PDO::PARAM_STR);
        // $inserir->bindValue(':GRUPO',$dados['grupo'],PDO::PARAM_STR);

        // $inserir->execute();
        return $this->db->insert('cadastro', $dados);
        //inserindo na tabela cadastro o array contido em $dados
    }
}