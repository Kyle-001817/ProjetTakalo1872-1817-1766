<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertObjets extends CI_Controller {
    public function index() {
        $this->load->model('Categorie_model');
        $this->load->model('user_model');
        $data2 = $this->user_model->getsession();   
        $this->load->view('Templates/header', array('data2' => $data2));
        $data['categories'] = $this->Categorie_model->getAllCategorie();
        $this->load->view('Templates/InsertionObjet', $data);
    }

    public function save() {
        $this->load->model('Objets_model');
        $this->load->model('Categorie_model');
        $this->load->model('Photo_model');
        $categorie = $this->input->post('categorie');
        $objets = array (
            'nom' => $this->input->post('nomobjet'),
            'descriptions' => $this->input->post('descri'),
            'prixestimatif' => $this->input->post('prix')
        );
        $this->Objets_model->insert_objet($objets);

        $lastId = $this->Objets_model->getLastId();
        $categories = array (
            'idcategorie' => $categorie,
            'idobjet' => $lastId
        );
        $this->Categorie_model->insert_categorie_for_objet($categories);

        $config['upload_path'] = 'assets/img/uploads';
        $config['allowed_types'] = 'gif|jpg|png|img|PNG';
        $config['max_size'] = 100000;

        $this->load->library('upload', $config);

        $files = $_FILES;
        $count = count($_FILES['images']['name']);
        for ($i=0; $i < $count; $i++) { 
            $nomphoto = $files['images']['name'][$i];

            $_FILES['images']['name'] = $files['images']['name'][$i];
            $_FILES['images']['type'] = $files['images']['type'][$i];
            $_FILES['images']['tmp_name'] = $files['images']['tmp_name'][$i];
            $_FILES['images']['error'] = $files['images']['error'][$i];
            $_FILES['images']['size'] = $files['images']['size'][$i];

            if (!$this->upload->do_upload('images')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $data = array('upload_data' => $this->upload->data());
                $photo = array (
                    'idobjet' => $lastId,
                    'lienimage' => $nomphoto
                );
                $this->Photo_model->insert_photo($photo);
            }
        }
        $this->load->model('user_model');
        $data2 = $this->user_model->getsession();   
        foreach($data2 as $d) 
        $user = $d['iduser'];
        $proprietaire = array(
            'iduser' => $user,
            'idobjet' => $lastId
        );
        $this->Objets_model->insertProprietaire($proprietaire);
        // echo 'File Name: ' . $data['upload_data']['file_name'] . '<br>';
        $data1 = $this->Objets_model->getAllObjets($this->session->userdata('iduser'));
        $this->load->view('Templates/header', array('data2' => $data2));
        $this->load->view('Templates/Accueil', array('data1' => $data1));
    }
}