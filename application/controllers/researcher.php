<?php

class Researcher extends CI_Controller {

    public function login() {

        // ======== Library ========//
        $this->load->library('session');
        $data['session_data'] = array(
            'session_id' => $this->session->userdata('session_id'),
            'ip_address' => $this->session->userdata('ip_address'),
            'user_agent' => $this->session->userdata('user_agent'),
            'last_activity' => $this->session->userdata('last_activity')
        );



        // ======== Helper ======== //
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('captcha');
         
        
        // ======== Model ======== //
        $this->load->database();
        $this->load->model('Researchermodel');
        $this->Researchermodel->get_login();
        $data['show'] = $this->Researchermodel->show;
        $data['username'] = $this->Researchermodel->username;
        $data['password'] = $this->Researchermodel->password;


        // ======== HTML Componets ======== //
        // --- Template ----//
        // Title
        $data['title'] = 'Login';

        // Stylesheet
        $data['bootstrap_css'] = link_tag('assets/bootstrap/css/bootstrap.min.css', 'stylesheet', 'text/css');
        $data['stylesheet'] = link_tag('assets/stylesheet/stylesheet.css', 'stylesheet', 'text/css');

        // JavaScript
        $data['bootstrap_js'] = base_url('assets/bootstrap/js/bootstrap.min.js');


        // --- Form --- //

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

}
