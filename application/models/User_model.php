<?php

class User_model extends CI_Model {
    public function insert_user($data) {
        return $this->db->insert('utilisateur', $data);
    }

    public function getsession() {
        $this->db->select('*');
        $this->db->from('session');
        $this->db->order_by('idsession' , 'desc');
        $this->db->limit(1);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert_session($data) {
        return $this->db->insert('session', $data);
    }

    public function getUser($iduser) {
        $this->db->select('iduser,nom,prenom');
        $this->db->from('utilisateur');
        $this->db->where('iduser' , $iduser);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_user($email, $password) {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('email' , $email);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}