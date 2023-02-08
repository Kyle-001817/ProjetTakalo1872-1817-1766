<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
        $this->load->view('index');
	}	

	public function deconnecter() {
		$this->session->unset_userdata('iduser');
		$this->session->unset_userdata('nom');
		$this->session->sess_destroy();
        redirect('index.php/welcome');
	}

	public function accueil() {
		$this->load->model('user_model');
		$data2 = $this->user_model->getsession();     
		$this->load->model('objets_model');    
		foreach($data2 as $ses)
		$iduser = $ses['iduser'];
		$data1 = $this->objets_model->get_objets($iduser);
		$this->load->view('Templates/header', array('data2' => $data2));
		$this->load->view('Templates/Accueil', array('data1' => $data1));
	}
}
