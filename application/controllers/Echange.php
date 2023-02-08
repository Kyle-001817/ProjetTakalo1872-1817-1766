<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Controller {
	public function detail()
	{   
        $idobjet = $this->input->post('idobjet');
        $iduser = $this->input->post('iduser');

        $this->load->model('objets_model');  
        $this->load->model('user_model');  
        $this->load->model('photo_model');  

        $objets = $this->objets_model->getone_objet($idobjet); 
        $user = $this->user_model->getUser($iduser);
        $photo = $this->photo_model->get_photo($idobjet);
        $data2 = $this->user_model->getsession();   
        foreach($data2 as $us)
        $izy = $us['iduser'];
        $userobjet = $this->objets_model->getobjetuser($izy);
        $this->load->view('Templates/header', array('data2' => $data2));
        $this->load->view('Templates/Echange', array('objets' => $objets, 'user' => $user, 'photo' => $photo, 'userobjet' => $userobjet));
	}	

    public function echanger() {
        
    }

    public function demande() {
        $this->load->model('user_model');
        $data2 = $this->user_model->getsession();   
        $this->load->view('Templates/header', array('data2' => $data2));
        $this->load->view('Templates/Demande');
    }
}
