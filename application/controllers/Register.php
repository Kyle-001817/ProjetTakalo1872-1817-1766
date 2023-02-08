<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function inscription() {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->model('user_model');
        $data2 = $this->user_model->getsession();     
        $this->load->view('Templates/header', $data2);
        $this->load->view('Templates/register_form');
    }
	public function register_user()
    {
        $data = array (
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->load->model('user_model');
        $this->user_model->insert_user($data);
        redirect('index.php/Register/login');
    }	

    public function login() {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->view('Templates/login_form');
    }

    public function login_user() {
        $this->load->model('user_model');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $result = $this->user_model->get_user($email, $password);
        $iduser = null;
        $nom = null;

        if ($result) {
            // Login successful

            $this->load->model('objets_model');    
            foreach ($result as $d1) {
                $iduser = $d1['iduser'];
                $nom = $d1['nom'];
            }
            $data1 = $this->objets_model->get_objets($iduser);   
            $tab = array(
                'iduser' => $iduser,
                'nom' => $nom
            );
            $result = $this->user_model->insert_session($tab);   
            $data2 = $this->user_model->getsession();

            $this->load->view('Templates/header', array('data2' => $data2));
            $this->load->view('Templates/Accueil', array('data1' => $data1));
        } else {
            // Login failed
            redirect('index.php/register/login');
        }
    }
}
