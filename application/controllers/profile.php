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

        $this->data['welcome'] = '<h4>ยินดีต้อนรับ</h4>';

        $this->load->model('profile_model');

        $user_welcome = '<br>เข้าใช้งานครั้งล่าสุด : ' . $this->session->userdata('recent_login');
        $user_welcome .= '<br>เข้าใช้งานครั้งก่อน : ' . $this->session->userdata('last_time_login');

        if ($this->session->userdata('level') == 10) {

            $this->data['welcome'] .= $this->session->userdata('username') . $user_welcome;

            $this->data['query'] = $this->profile_model->get_list();

            $data = $this->data;
            $this->load->view('theme/mytheme/template/header', $data);
            $this->load->view('researcher_list', $data);
        } else {
            $user_data = $this->profile_model->get_user_data($this->session->userdata('researcher_key'));
            foreach ($user_data as $row) :
                $user_welcome0 = 'คุณ ' . $row->firstname_th . ' ' . $row->lastname_th;

            endforeach;

            $this->data['welcome'] .= $user_welcome0 . $user_welcome;

            $this->data['query'] = $this->profile_model->get_profile($this->session->userdata('researcher_key'));
            $data = $this->data;
            $this->load->view('theme/mytheme/template/header', $data);
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

    public function id($id) {
        if ($this->session->userdata('level') != 10) {
            redirect(base_url() . 'index.php/profile');
        }

        $user_welcome = '<br>เข้าใช้งานครั้งล่าสุด : ' . $this->session->userdata('recent_login');
        $user_welcome .= '<br>เข้าใช้งานครั้งก่อน : ' . $this->session->userdata('last_time_login');

        $this->load->model('profile_model');
        $this->data['query'] = $this->profile_model->get_profile($id);

        $this->data['welcome'] = '<h4>ยินดีต้อนรับ</h4> คุณ ' . $this->session->userdata('username') . $user_welcome;

        $data = $this->data;
        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('profile', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

}
