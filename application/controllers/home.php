<?php

class Home extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();

        // ======== Library ========//
        $this->load->library('session');

        // ======== Helper ======== //
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('captcha');      
        
        // ======== Title ========
        $this->data['title'] = 'Home';        
        
        $this->check_isvalidated();
    }

    public function index() {
        // If the user is validated, then this function will run
        $this->data['msg'] = 'Congratulations, you are logged in.';
        $this->data['logout_tag'] = '<br /><a href="' . base_url() . 'index.php/home/do_logout">Logout</a>';

        $data = $this->data;

        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('home', $data);
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

}
