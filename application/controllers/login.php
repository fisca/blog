<?php

class Login extends CI_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();

        // ======== Library ========//
        $this->load->library('session');

        // ======== Driver ========//
        $this->load->database();

        // ======== Helper ======== //
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');

        if ($this->session->userdata('validated')) {
            redirect('home');
        }
    }

    public function index($msg = '') {

        $this->data['msg'] = $msg;

        // ---- Title ---- //
        $this->data['title'] = 'Login';

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
            'class' => 'col-sm-4 control-label'
        );


        // ---- Sending data to views ---- //
        $this->data['input'] = array(
            'username' => form_label('Username', 'username', $label_att) . '<div class="col-sm-5">' . form_input($input['username']) . '</div>',
            'password' => form_label('Password', 'password', $label_att) . '<div class="col-sm-5">' . form_password($input['password']) . '</div>',
            'submit' => '<div class="col-md-12" style="text-align: center;"><button type="submit" class="btn btn-default">Sign in</button></div>'
        );

        $data = $this->data;

        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('login_view', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    public function process() {
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if (!$result) {
            // If user did not validate, then show them login page again
            $msg = $this->login_model->error_msg;
            $this->index($msg);
        } else {
            // If user did validate, 
            // Send them to members area
            // redirect(base_url() . 'index.php/login/home', 'location');
            redirect('home');
        }
    }

}
