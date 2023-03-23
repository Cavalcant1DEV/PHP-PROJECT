<?php

class Remover_cadastro extends CI_Model {
    public function apagar_linha($id=''){
        $this->db->where('id',$id);
        //Apagando dados através do índicie do ID
        return $this->db->delete('cadastro');
    }
}