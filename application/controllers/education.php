<?php

class Education extends CI_Controller {

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
        $this->data['title'] = 'Education';

        $this->check_isvalidated();
    }

    public function index() {
        // If the user is validated, then this function will run
        $this->user_check();

        $this->load->model('education_model');

        $this->data['researcher_key'] = $this->session->userdata('researcher_key');

        $this->data['query'] = $this->education_model->get_education($this->session->userdata('researcher_key'));
        $data = $this->data;
        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('education', $data);
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

    public function id($id) {
        if ($this->session->userdata('level') != 10) {
            redirect(base_url() . 'index.php/profile');
        }

        $user_welcome = '<br>เข้าใช้งานครั้งล่าสุด : ' . $this->session->userdata('recent_login');
        $user_welcome .= '<br>เข้าใช้งานครั้งก่อน : ' . $this->session->userdata('last_time_login');

        $this->load->model('profile_model');
        $this->data['query'] = $this->profile_model->get_profile($id);

        $this->data['welcome'] = '<span style="font-size: large;">ยินดีต้อนรับ</span><br>คุณ ' . $this->session->userdata('username') . $user_welcome;

        $data = $this->data;
        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('profile', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    public function edit_education() {
        $edit_id = $this->security->xss_clean($this->input->post('education_id'));
        $this->load->model('education_model');
        $education_data = $this->education_model->get_edit_education($edit_id);

        foreach ($education_data as $row) :
            $researcher_id = $row->researcher_id;
        endforeach;

        if (($this->session->userdata('level') == 10) or ($this->session->userdata('researcher_key') == $researcher_id)) :
            $this->data['welcome'] = '<span style="font-size: large;">ยินดีต้อนรับ</span><br>';
            $user_welcome = '<br>เข้าใช้งานครั้งล่าสุด : ' . $this->session->userdata('recent_login');
            $user_welcome .= '<br>เข้าใช้งานครั้งก่อน : ' . $this->session->userdata('last_time_login');

            $this->load->model('profile_model');

            if ($this->session->userdata('level') == 10) {
                $this->data['welcome'] .= $this->session->userdata('username') . $user_welcome;
            } else {
                $user_data = $this->profile_model->get_user_data($this->session->userdata('researcher_key'));
                foreach ($user_data as $row) :
                    $user_welcome0 = 'คุณ ' . $row->firstname_th . ' ' . $row->lastname_th;

                endforeach;

                $this->data['welcome'] .= $user_welcome0 . $user_welcome;
            }

            $this->load->model('education_model');
            $this->data['query'] = $this->education_model->get_edit_education($edit_id);

            $this->data['title'] = "แก้ไข Education";

            $data = $this->data;

            $this->load->view('theme/mytheme/template/header', $data);
            $this->load->view('edit_education', $data);
            $this->load->view('theme/mytheme/template/footer', $data);
        else :
            redirect('education');
        endif;
    }

    public function edit_process() {
        $this->load->model('education_model');
        $this->education_model->update_education();
        redirect('education');
    }

    public function add_education() {
        if (!$this->input->post('researcher_key')) {
            redirect('education');
        }
        $this->data['add_key'] = $this->security->xss_clean($this->input->post('researcher_key'));

        $this->data['welcome'] = '<span style="font-size: large;">ยินดีต้อนรับ</span><br> คุณ ';
        $user_welcome = '<br>เข้าใช้งานครั้งล่าสุด : ' . $this->session->userdata('recent_login');
        $user_welcome .= '<br>เข้าใช้งานครั้งก่อน : ' . $this->session->userdata('last_time_login');

        $this->data['welcome'] .= $this->session->userdata('username') . $user_welcome;

        $this->data['title'] = "Add Education";
        $data = $this->data;

        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('add_education', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    public function add_process() {
        $this->load->model('education_model');
        // $this->education_model->insert_education();
        redirect('education');
    }

}
