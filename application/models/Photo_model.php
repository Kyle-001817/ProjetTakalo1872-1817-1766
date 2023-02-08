<?php

class Photo_model extends CI_Model {
    public function insert_photo($data) {
        return $this->db->insert('photo', $data);
    }

    public function get_photo($idObjets) {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->where('idobjet' , $idObjets);

        $query = $this->db->get();
        return $query->result_array();
    }
}