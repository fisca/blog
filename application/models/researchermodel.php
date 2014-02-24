<?php

class Researchermodel extends CI_Model {

    public $username = '';
    public $password = '';
    public $show = '';

// public $captcha;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_login() {
        if ($this->input->post('username')) {
            $username = mysql_real_escape_string($this->input->post('username'));
            $password = sha1(mysql_real_escape_string($this->input->post('password')));

            $sql = "SELECT * FROM ci_user WHERE username='$username' AND password='$password';";

            $query = $this->db->query($sql);

            if ($query->num_rows() != 1) {
                $this->show = "No data.";
                $this->username = '';
                $this->password = '';
            } else {
                $this->show = 'You got a data.';
                foreach ($query->result() as $row) {
                    $this->username = $row->username;
                    $this->password = $row->password;
                }
            }
        }
    }

// END get_login()
}
