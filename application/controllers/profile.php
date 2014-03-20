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

        $this->user_check();

        $this->data['query'] = $this->profile_model->get_profile($this->session->userdata('researcher_key'));

        $data = $this->data;
        $this->load->view('theme/mytheme/template/header', $data);

        $this->load->view('profile', $data);

        $this->load->view('theme/mytheme/template/footer', $data);
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
        if ($this->session->userdata('level') == 10) {
            redirect("admin", "location");
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

    public function key($key) {
        if ($this->session->userdata('level') != 10) {
            redirect('profile');
        }

        $user_welcome = '<br>เข้าใช้งานครั้งล่าสุด : ' . $this->session->userdata('recent_login');
        $user_welcome .= '<br>เข้าใช้งานครั้งก่อน : ' . $this->session->userdata('last_time_login');

        $this->load->model('profile_model');
        $this->data['query'] = $this->profile_model->get_profile($key);

        $this->data['welcome'] = '<span style="font-size: large;">ยินดีต้อนรับ</span><br>คุณ ' . $this->session->userdata('username') . $user_welcome;

        $data = $this->data;
        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('profile', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    public function edit_profile() {
        $edit_key = $this->security->xss_clean($this->input->post('researcher_key'));

        if ($this->session->userdata('researcher_key') == $edit_key) :
            
            $this->user_check();

            $this->data['query'] = $this->profile_model->get_profile($edit_key);

            $this->data['title'] = "แก้ไข Profile";

            $data = $this->data;

            $this->load->view('theme/mytheme/template/header', $data);
            $this->load->view('edit_profile', $data);
            $this->load->view('theme/mytheme/template/footer', $data);

        else :
            redirect('profile');
        endif;
    }

    public function edit_process() {
        $this->load->model('profile_model');
        $this->profile_model->update_profile();
        redirect('profile');
    }

    public function add_profile() {
        if (!$this->input->post('researcher_key')) {
            redirect('profile');
        }
        $this->data['add_key'] = $this->security->xss_clean($this->input->post('researcher_key'));

        $this->data['welcome'] = '<span style="font-size: large;">ยินดีต้อนรับ</span><br> คุณ ';
        $user_welcome = '<br>เข้าใช้งานครั้งล่าสุด : ' . $this->session->userdata('recent_login');
        $user_welcome .= '<br>เข้าใช้งานครั้งก่อน : ' . $this->session->userdata('last_time_login');

        $this->data['welcome'] .= $this->session->userdata('username') . $user_welcome;

        $this->data['title'] = "Add Profile";
        $data = $this->data;

        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('add_profile', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    public function add_process() {
        $this->load->model('profile_model');
        $this->profile_model->insert_profile();
        redirect('profile');
    }

}
