<?php

class Blog extends CI_Controller {

    function index() {
        $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";

        $this->load->view('blogview', $data);
    }

    function comments() {
        echo 'Look at this!';
    }

}

?>