<?php

class Researcher extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // ======== Library ========//
        $this->load->library('session');

        // ======== Helper ======== //
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('captcha');

        // ======== Model ======== //        
        $this->load->model('Researchermodel');

        // ==== User Session Data ==== //
        $data['session_data'] = array(
            'session_id' => $this->session->userdata('session_id'),
            'ip_address' => $this->session->userdata('ip_address'),
            'user_agent' => $this->session->userdata('user_agent'),
            'last_activity' => $this->session->userdata('last_activity')
        );
    }

// END __constructor()

    public function index() {
        if (isset($_SESSION['username']) && $_SESSION['password']) {
            redirect('researcher/home', 'location');
        } else {
            redirect('researcher/login', 'location');
        }
    }

    public function login() {

        // ======== HTML Componets ======== // 
        // ---- Stylesheet ---- //
        $data['bootstrap_css'] = link_tag('assets/bootstrap/css/bootstrap.min.css', 'stylesheet', 'text/css');
        $data['stylesheet'] = link_tag('assets/stylesheet/stylesheet.css', 'stylesheet', 'text/css');

        // ---- JavaScript ---- //
        $data['bootstrap_js'] = base_url('assets/bootstrap/js/bootstrap.min.js');


        // ---- Meta ---- //
        // ---- Title ---- //
        $data['title'] = 'Login';



        // ---- Form ---- //
        $input = array(
            'username' => array(
                'class' => 'form-control',
                'name' => 'username',
                'id' => 'username',
                'required' => 'required'
            ),
            'password' => array(
                'class' => 'form-control',
                'name' => 'password',
                'id' => 'password',
                'required' => 'required'
            )
        );

        $label_att = array(
            'class' => 'col-sm-2 control-label'
        );


        // ---- Sending data to views ---- //
        $data['input'] = array(
            'username' => form_label('Username', 'username', $label_att) . '<div class="col-sm-10">' . form_input($input['username']) . '</div>',
            'password' => form_label('Password', 'password', $label_att) . '<div class="col-sm-10">' . form_password($input['password']) . '</div>',
            'submit' => '<div class="col-md-12" style="text-align: center;"><button type="submit" class="btn btn-default">Sign in</button></div>'
        );


        // --- Pages loding ---- //
        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('researcher/login', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

// Login()

    public function Home() {

        // ==== Login Information from Model ==== //
        $this->Researchermodel->get_login();

        if (!empty($this->Researchermodel->username) && !empty($this->Researchermodel->password)) {
            $session_login = array(
                'username' => $this->Researchermodel->username,
                'password' => $this->Researchermodel->password
            );
            $_SESSION['username'] = $session_login['username'];
            $_SESSION['password'] = $session_login['password'];

            $data['session_login'] = $session_login;
        } else {
            redirect('researcher/login', 'location');
        }

        // ======== HTML Componets ======== // 
        // ---- Stylesheet ---- //
        $data['bootstrap_css'] = link_tag('assets/bootstrap/css/bootstrap.min.css', 'stylesheet', 'text/css');
        $data['stylesheet'] = link_tag('assets/stylesheet/stylesheet.css', 'stylesheet', 'text/css');

        // ---- JavaScript ---- //
        $data['bootstrap_js'] = base_url('assets/bootstrap/js/bootstrap.min.js');
        $data['title'] = 'Home';


        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('researcher/home', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

}

// END Researcher
