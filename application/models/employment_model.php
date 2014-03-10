<?php

class Employment_model extends CI_Model {

    public $data;

    function __construct() {
        parent::__construct();
    }

    public function get_employment($researcher_id) {
        $this->db->where('researcher_id', $researcher_id);
        $query = $this->db->get('ci_employment');
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

    public function update_employment() {
        $employment_id = $this->security->xss_clean($this->input->post('employment_id'));
        $academic = $this->security->xss_clean($this->input->post('academic'));
        $administrative = $this->security->xss_clean($this->input->post('administrative'));
        $research = $this->security->xss_clean($this->input->post('research'));
        
        $street_en = $this->security->xss_clean($this->input->post('street_en'));
        $sub_district_en = $this->security->xss_clean($this->input->post('sub_district_en'));
        $district_en = $this->security->xss_clean($this->input->post('district_en'));
        $province_en = $this->security->xss_clean($this->input->post('province_en'));
        $postal_code = $this->security->xss_clean($this->input->post('postal_code'));
        $phone = $this->security->xss_clean($this->input->post('phone'));
        $mobile_phone = $this->security->xss_clean($this->input->post('mobile_phone'));
        $email = $this->security->xss_clean($this->input->post('email'));
        $website = $this->security->xss_clean($this->input->post('website'));
        
        
        

        $sql = "UPDATE ci_employment
            SET 
                academic='$academic', administrative='$administrative', research='$research',
                street_en='$street_en', sub_district_en='$sub_district_en', district_en='$district_en', province_en='$province_en', postal_code='$postal_code',
                phone='$phone', mobile_phone='$mobile_phone', email='$email', website='$website' 
            WHERE employment_id = $employment_id;";
        $this->db->query($sql);
    }

}
