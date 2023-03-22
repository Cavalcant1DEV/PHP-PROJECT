<?php

class Remover_cadastro extends CI_Model {
    public function apagar_linha($id=''){
        $this->db->where('id',$id);
        return $this->db->delete('cadastro');
    }
}