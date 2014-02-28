<?php

class Profile_model extends CI_Model {

    public $data;

    function __construct() {
        parent::__construct();
    }

    public function get_profile($researcher_id) {
        $this->db->where('researcher_id', $researcher_id);
        $query = $this->db->get('ci_profile');
        return $query->result();
    }

    public function get_list() {
        $query = $this->db->get('ci_profile');
        return $query->result();
    }

    public function get_user_data($researcher_key) {
        $this->db->where('researcher_id', $researcher_key);
        $query = $this->db->get('ci_profile');
        return $query->result();
    }

}
