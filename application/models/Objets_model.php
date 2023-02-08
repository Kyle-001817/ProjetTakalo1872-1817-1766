<?php

class Objets_model extends CI_Model {
    public function insert_objet($data) {
        return $this->db->insert('objets', $data);
    }

    public function insertProprietaire($data) {
        return $this->db->insert('proprietaireobject', $data);
    }

    public function get_objets($idObjets) {
        $query = $this->db->query(
            'select pro.iduser , us.nom, ob.idobjet, ob.nom as nomobjet, ob.descriptions, ob.prixestimatif, ph.lienimage
            from proprietaireobject as pro 
            join objets as ob on pro.idobjet=ob.idobjet
            join utilisateur as us on pro.iduser=us.iduser
            join photo as ph on pro.idobjet = ph.idobjet 
            where pro.iduser != '.$idObjets.'
            group by pro.idobjet'
        );

        return $query->result_array();
    }

    public function getobjetuser($idObjets) {
        $query = $this->db->query(
            'select pro.iduser , us.nom, ob.idobjet, ob.nom as nomobjet, ob.descriptions, ob.prixestimatif, ph.lienimage
            from proprietaireobject as pro 
            join objets as ob on pro.idobjet=ob.idobjet
            join utilisateur as us on pro.iduser=us.iduser
            join photo as ph on pro.idobjet = ph.idobjet 
            where pro.iduser = '.$idObjets.'
            group by pro.idobjet'
        );

        return $query->result_array();
    }

    public function getone_objet($idObjets) {
        $query = $this->db->query(
            'select * from objets where idobjet = '.$idObjets
        );

        return $query->result_array();
    }

    public function getAllObjets() {
        $query = $this->db->query(
            'Select pro.iduser , us.nom, ob.idobjet, ob.nom as nomobjet, ob.descriptions, ob.prixestimatif, ph.lienimage
            from proprietaireobject as pro 
            join objets as ob on pro.idobjet=ob.idobjet
            join utilisateur as us on pro.iduser=us.iduser
            join photo as ph on pro.idobjet = ph.idobjet group by pro.idobjet'
        );

        return $query->result_array();
    }

    public function getLastId() {
        $this->db->select('idobjet');
        $this->db->from('objets');
        $this->db->order_by('idobjet' , 'desc');
        $this->db->limit(1);

        $query = $this->db->get();
        $result = $query->row();
        return $result->idobjet;
    }

    public function changeUserObjet($idObjets, $iduser) {
        $table = get_objets($idObjets);
        foreach($table as $t) 
        $query = 'inse';
    }
}