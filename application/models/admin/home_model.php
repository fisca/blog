<?php

class Home_model extends CI_Model {

    public $data;

    function __construct() {
        parent::__construct();
    }

    public function get_list() {
        $query = $this->db->get('ci_profile');
        return $query->result();
    }

}
