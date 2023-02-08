<?php

class Categorie_model extends CI_Model {
    public function insert_categorie_for_objet($data) {
        return $this->db->insert('categorieobjet', $data);
    }

    public function getAllCategorie() {
        $this->db->select('*');
        $this->db->from('categorie');

        $query = $this->db->get();
        return $query->result_array();
    }
}