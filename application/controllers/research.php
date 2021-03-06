<?php

class Research extends CI_Controller {

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
        $this->data['title'] = 'Research data';

        $this->check_isvalidated();
    }

    public function index() {
        // If the user is validated, then this function will run
        $this->user_check();
        $this->load->model('research_model');
        $this->data['query'] = $this->research_model->get_research($this->session->userdata('researcher_key'));
        $this->data['query_expertise'] = $this->research_model->get_expertise($this->session->userdata('researcher_key'));
        $this->data['researcher_key'] = $this->session->userdata('researcher_key');
        $data = $this->data;
        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('research', $data);
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

    public function edit_research() {
        $edit_id = $this->security->xss_clean($this->input->post('training_id'));
        $this->user_check();
        $this->load->model('research_model');
        $this->data['query'] = $this->research_model->get_edit_research($edit_id);
        $this->data['title'] = "Edit Research Training";
        $data = $this->data;
        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('edit_research', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    public function edit_expertise() {
        $edit_expertise_id = $this->security->xss_clean($this->input->post('expertise_id'));
        $this->user_check();
        $this->load->model('research_model');
        $this->data['query_expertise'] = $this->research_model->get_edit_expertise($edit_expertise_id);
        $this->data['title'] = "Edit Expertise";
        $data = $this->data;
        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('edit_expertise', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    public function edit_training_process() {
        $this->check_isvalidated();
        $this->load->model('research_model');
        $this->research_model->update_training();
        redirect('research');
    }

    public function edit_expertise_process() {
        $this->check_isvalidated();
        $this->load->model('research_model');
        $this->research_model->update_expertise();
        redirect('research');
    }

    public function add_research() {
        $this->check_isvalidated();

        $this->user_check();

        $this->data['researcher_key'] = $this->session->userdata('researcher_key');
        
        $this->data['title'] = 'Add Research data';

        $data = $this->data;

        $this->load->view('theme/mytheme/template/header', $data);
        // $this->load->view('add_research', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    public function delete_research($id) {
        $this->check_isvalidated();
        $this->load->model('research_model');
        $this->research_model->delete_training($id);
        redirect('research');
    }

}
