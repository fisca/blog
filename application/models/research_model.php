<?php

class Research_model extends CI_Model {

    public $data;

    function __construct() {
        parent::__construct();
    }

    public function get_research($researcher_id) {
        $sql = "SELECT * FROM ci_research_training WHERE researcher_id = '$researcher_id';";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_expertise($researcher_id) {
        $sql = "SELECT * FROM ci_expertise WHERE researcher_id = '$researcher_id';";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_edit_research($training_id) {
        $sql = "SELECT * FROM ci_research_training WHERE training_id = '$training_id';";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_edit_expertise($expertise_id) {
        $sql = "SELECT * FROM ci_expertise WHERE expertise_id = '$expertise_id';";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update_training() {
        $training_id = $this->security->xss_clean($this->input->post('training_id'));
        $training_type = $this->security->xss_clean($this->input->post('training_type'));
        $institute = $this->security->xss_clean($this->input->post('institute'));
        $training_start = date("Y-m-d", strtotime($this->security->xss_clean($this->input->post('training_start'))));
        $training_end = date("Y-m-d", strtotime($this->security->xss_clean($this->input->post('training_end'))));
        $supervisor = $this->security->xss_clean($this->input->post('supervisor'));
        $sql = "UPDATE ci_research_training SET 
                training_type ='$training_type', institute='$institute', training_start='$training_start', training_end='$training_end', supervisor='$supervisor'
            WHERE training_id = $training_id;";
        $this->db->query($sql);
    }
    
    public function update_expertise() {
        $expertise_id = $this->security->xss_clean($this->input->post('expertise_id'));
        $topic = $this->security->xss_clean($this->input->post('topic'));
        $sql = "UPDATE ci_expertise SET 
                topic ='$topic'
            WHERE expertise_id = $expertise_id;";
        $this->db->query($sql);
    }
    
    public function delete_training($training_id){
        $training_id = $this->security->xss_clean($this->input->post('training_id'));
        
        $sql = "DELETE FROM ci_research_training WHERE training='$training_id';";
    }

}
