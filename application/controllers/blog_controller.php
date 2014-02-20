<?php

class Blog_controller extends CI_Controller {

    function blog() {

        $this->load->database();

        $this->load->model('Blogmodel');

        $data['query'] = $this->Blogmodel->get_last_ten_entries();

        $this->load->view('blog/entries', $data);
    }

}
