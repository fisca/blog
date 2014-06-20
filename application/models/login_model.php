<?php

class Login_model extends CI_Model {

    public $error_msg = array();

    function __construct() {
        parent::__construct();

        $this->load->helper('captcha');
    }

    public function validate() {
        /*
          // First, delete old captchas
          $expiration = time() - 600; // 7200 Two hour limit
          $this->db->query("DELETE FROM captcha WHERE captcha_time < " . $expiration); // Then see if a captcha exists: $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
          $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
          $binds = array($this->input->post('captcha'), $this->input->ip_address(), $expiration);
          $query = $this->db->query($sql, $binds);
          $row = $query->row();
         */
        /*
          if ($row->count == 0) {
          $this->error_msg['captcha'] = "You must submit the word that appears in the image";
          return FALSE;
          } else {
         */

        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', sha1($password));

        // Run the query
        $query = $this->db->get('ci_user');
        // Let's check if there are any results        
        if ($query->num_rows == 1) {
            $row = $query->row();
            
            date_default_timezone_set("Asia/Bangkok");
            $data_update = array(
                'recent_login' => date("Y-m-d H:i:s"),
                'last_time_login' => $row->recent_login
            );
            $where = "user_id = $row->user_id";
            $str = $this->db->update_string('ci_user', $data_update, $where);
            $this->db->query($str);

            // If there is a user, then create session data
            $this->db->where('username', $username);
            $this->db->where('password', sha1($password));
            $query = $this->db->get('ci_user');
            $row = $query->row();
            $data = array(
                'user_id' => $row->user_id,
                'username' => $row->username,
                'recent_login' => $row->recent_login,
                'last_time_login' => $row->last_time_login,
                'researcher_key' => $row->researcher_key,
                'level' => $row->level,
                'validated' => true
            );

            $this->session->set_userdata($data);



            return true;
        }
        // If the previous process did not validate
        // then return false.
        $this->error_msg['user'] = "Wrong 'Username' or 'Password'.";
        return false;
    }

}
