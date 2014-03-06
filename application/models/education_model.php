<?php

class Education_model extends CI_Model {

    public $data;

    function __construct() {
        parent::__construct();
    }

    public function get_education($researcher_id) {
        $sql = "SELECT * FROM ci_education WHERE researcher_id = '$researcher_id' ORDER BY grad_year DESC;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_edit_education($education_id) {
        $sql = "SELECT * FROM ci_education WHERE education_id = '$education_id';";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function update_education() {
        $education_id = $this->security->xss_clean($this->input->post('education_id'));

        $grad_year = $this->security->xss_clean($this->input->post('grad_year'));
        $degree = $this->security->xss_clean($this->input->post('degree'));
        $major = $this->security->xss_clean($this->input->post('major'));
        $institue = $this->security->xss_clean($this->input->post('institue'));
        $country = $this->security->xss_clean($this->input->post('country'));
        $thesis_title = $this->security->xss_clean($this->input->post('thesis_title'));
        $keyword = $this->security->xss_clean($this->input->post('keyword'));

        $sql = "UPDATE ci_education 
            SET 
                grad_year ='$grad_year', degree='$degree', major='$major', institue='$institue',
                country='$country', thesis_title='$thesis_title', keyword='$keyword' 
            WHERE education_id = $education_id;";
        $this->db->query($sql);
    }

}
