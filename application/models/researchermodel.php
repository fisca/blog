<?php

class Researchermodel extends CI_Model {

    public $username;
    public $password;
    public $show;

// public $captcha;

    public function get_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if (!empty($username) && !empty($password)) {
            $this->username = mysql_real_escape_string($this->input->post('username'));
            $this->password = sha1(mysql_real_escape_string($this->input->post('password')));

            $sql = "SELECT * FROM ci_user WHERE username='$this->username' AND password='$this->password';";

            $query = $this->db->query($sql);

            if ($query->num_rows() != 1) {
                $this->show = "No data.";
            } else {
                $this->show = 'You got a data.';
                foreach ($query->result() as $row) {
                    $this->username = $row->username;
                    $this->password = $row->password;
                }
            }
        }
    }

}
