<?php

class Editar_cadastro_model extends CI_Model {
    public function editar($dados){

        $this->db->set($dados);
        $this->db->where('id',$dados['id']);
        return $this->db->update('cadastro');
    }
}