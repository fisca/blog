<?php

class Home extends CI_Controller {

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
        $this->data['title'] = 'Admin: Home';

        $this->check_isvalidated();
    }

    public function index() {
        $this->user_check();
        $this->data['query'] = $this->profile_model->get_profile($this->session->userdata('researcher_key'));
        $this->load->model('admin/home_model', 'home_model');
        $this->data['q_list'] = $this->home_model->get_list();
        $data = $this->data;
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('admin/template/footer', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('validated')) {
            redirect('login');
        }
    }

    public function user_check() {
        $this->data['recent_login'] = $this->session->userdata('recent_login');
        $this->data['last_time_login'] = $this->session->userdata('last_time_login');
        $this->load->model('profile_model');
        if ($this->session->userdata('level') != 10) {
            redirect("home", "location");
        } else {
            $user_data = $this->profile_model->get_user_data($this->session->userdata('researcher_key'));
            if (!$user_data):
                $this->data['username'] = $this->session->userdata('username');
                $this->data['researcher_key'] = $this->session->userdata('researcher_key');
            else :
                foreach ($user_data as $row) :
                    $this->data['username'] = $row->firstname_th . ' ' . $row->lastname_th;
                endforeach;
            endif;
        }
    }

    public function do_logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function researcher($key) {
        $this->user_check();
        $this->data['query'] = $this->profile_model->get_profile($this->session->userdata('researcher_key'));
        $this->data['q_profile'] = $this->profile_model->get_profile($key);
        $data = $this->data;
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/researcher', $data);
        $this->load->view('admin/template/footer', $data);
    }

}
