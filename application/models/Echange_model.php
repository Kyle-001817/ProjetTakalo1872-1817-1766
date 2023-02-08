<?php

class Echange_model extends CI_Model {
    public function echanger($data) {
        return $this->db->insert('echange', $data);
    }

    public function getAllEchange() {
        $this->db->select('*');
        $this->db->from('echange');

        $query = $this->db->get();
        return $query->result_array();
    }

    public getDemandeEchange($iduser) {
        $this->db->select('*');
        $this->db->from('echange');
        $this->db->where('iduser2' , $iduser);
        $this->db->where('etat' , 'en attente');

        $query = $this->db->get();
        return $query->result_array();
    }
}