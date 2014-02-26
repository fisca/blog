<?php

class Profile_model extends CI_Model {

    public $data;

    function __construct() {
        parent::__construct();
    }

    public function get_profile($researcher_key) {
        if ($researcher_key == 999999) {
            $query = $this->db->get('ci_profile');
            return $query->result();
        } else {
            $this->db->where('researcher_id', $researcher_key);
            $query = $this->db->get('ci_profile');
            return $query->result();
        }
    }

}
