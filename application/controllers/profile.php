<?php

class Profile extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();

        // ======== Library ========//
        $this->load->library('session');

        // ======== Driver ========//
        $this->load->database();

        // ======== Helper ======== //
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('captcha');

        // ======== Title ========
        $this->data['title'] = 'Profile';

        $this->check_isvalidated();
    }

    public function index() {
        // If the user is validated, then this function will run
        
        $this->data['logout_tag'] = '<br /><a href="' . base_url() . 'index.php/home/do_logout">Logout</a>';
        
        $researcher_key = $this->session->userdata('researcher_key');
        
        $this->data['welcome'] = "Hello " .  $this->session->userdata('username');
        
        $this->load->model('profile_model');
        $this->data['query'] = $this->profile_model->get_profile($researcher_key);

        $data = $this->data;

        $this->load->view('theme/mytheme/template/header', $data);
        
        if($researcher_key == 999999) {
            $data['access_profile'] = TRUE;
            $this->load->view('researcher_list', $data);
        } else {            
            $this->load->view('profile', $data);
        }
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('login');
        }
    }

    public function do_logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
    
    public function researcher($id){
        $this->load->model('profile_model');
        $this->profile_model->xx();        
    }
    
    public function hi($msg){
        echo $msg;
    }

}
