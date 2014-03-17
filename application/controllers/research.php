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

        $this->data['welcome'] = '<span style="font-size: large;">ยินดีต้อนรับ</span><br>';

        $user_welcome = '<br>เข้าใช้งานครั้งล่าสุด : ' . date("F j, Y g:i:s a.", strtotime($this->session->userdata('recent_login')));
        $user_welcome .= '<br>เข้าใช้งานครั้งก่อน : ' . date("F j, Y g:i:s a.", strtotime($this->session->userdata('last_time_login')));

        $this->load->model('profile_model');
        $this->load->model('research_model');

        if ($this->session->userdata('level') == 10) {

            $this->data['welcome'] .= $this->session->userdata('username') . $user_welcome;

            $this->data['query'] = $this->education_model->get_list();

            $data = $this->data;
            $this->load->view('theme/mytheme/template/header', $data);
            $this->load->view('researcher_list', $data);
        } else {
            $user_data = $this->profile_model->get_user_data($this->session->userdata('researcher_key'));
            foreach ($user_data as $row) :
                $user_welcome0 = 'คุณ ' . $row->firstname_th . ' ' . $row->lastname_th;

            endforeach;

            $this->data['welcome'] .= $user_welcome0 . $user_welcome;
            
            $this->data['researcher_key'] = $this->session->userdata('researcher_key');

            $this->data['query'] = $this->research_model->get_research($this->session->userdata('researcher_key'));
            $this->data['query_expertise'] = $this->research_model->get_expertise($this->session->userdata('researcher_key'));
            $data = $this->data;
            $this->load->view('theme/mytheme/template/header', $data);
            $this->load->view('research', $data);
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

        $this->data['welcome'] = '<span style="font-size: large;">ยินดีต้อนรับ</span><br>คุณ ' . $this->session->userdata('username') . $user_welcome;

        $data = $this->data;
        $this->load->view('theme/mytheme/template/header', $data);
        $this->load->view('profile', $data);
        $this->load->view('theme/mytheme/template/footer', $data);
    }

    public function edit_research() {
        $edit_id = $this->security->xss_clean($this->input->post('training_id'));

        $this->load->model('research_model');
        $training_data = $this->research_model->get_edit_research($edit_id);

        foreach ($training_data as $row) :
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

            $this->data['query'] = $this->research_model->get_edit_research($edit_id);            

            $this->data['title'] = "Edit Research Training";

            $data = $this->data;

            $this->load->view('theme/mytheme/template/header', $data);
            $this->load->view('edit_research', $data);
            $this->load->view('theme/mytheme/template/footer', $data);
        else :
            redirect('research');
        endif;
    }

    public function edit_expertise() {
        $edit_expertise_id = $this->security->xss_clean($this->input->post('expertise_id'));

        $this->load->model('research_model');
        $expertise_data = $this->research_model->get_edit_expertise($edit_expertise_id);

        foreach ($expertise_data as $row) :
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
            
            $this->data['query_expertise'] = $this->research_model->get_edit_expertise($edit_expertise_id);

            $this->data['title'] = "Edit Expertise";

            $data = $this->data;

            $this->load->view('theme/mytheme/template/header', $data);
            $this->load->view('edit_expertise', $data);
            $this->load->view('theme/mytheme/template/footer', $data);
        else :
            redirect('research');
        endif;
    }

    public function edit_training_process() {
        $this->load->model('research_model');
        $this->research_model->update_training();
        redirect('research');
    }
    
    public function edit_expertise_process(){
        $this->load->model('research_model');
        $this->research_model->update_expertise();
        redirect('research');
    }

    public function add_research() {
        $this->check_isvalidated();
    }
    
    public function delete_research($id){
        $this->check_isvalidated();
        $this->load->model('research_model');
        $this->research_model->delete_training($id);
        redirect('research');
    }

}
