<?php

class Profile_model extends CI_Model {

    public $data;

    function __construct() {
        parent::__construct();
    }

    public function get_profile($researcher_key) {
        $this->db->where('researcher_key', $researcher_key);
        $query = $this->db->get('ci_profile');
        return $query->result();
    }

    public function get_list() {
        $query = $this->db->get('ci_profile');
        return $query->result();
    }

    public function get_user_data($researcher_key) {
        $this->db->where('researcher_key', $researcher_key);
        $query = $this->db->get('ci_profile');
        return $query->result();
    }

    public function update_profile() {
        $researcher_key = $this->security->xss_clean($this->input->post('researcher_key'));
        $firstname_en = $this->security->xss_clean($this->input->post('firstname_en'));
        $firstname_th = $this->security->xss_clean($this->input->post('firstname_th'));
        $lastname_en = $this->security->xss_clean($this->input->post('lastname_en'));
        $lastname_th = $this->security->xss_clean($this->input->post('lastname_th'));
        $title_en = $this->security->xss_clean($this->input->post('title_en'));
        $title_th = $this->security->xss_clean($this->input->post('title_th'));
        $gender = $this->security->xss_clean($this->input->post('gender'));

        $street_th = $this->security->xss_clean($this->input->post('street_th'));
        $sub_district_th = $this->security->xss_clean($this->input->post('sub_district_th'));
        $district_th = $this->security->xss_clean($this->input->post('district_th'));
        $province_th = $this->security->xss_clean($this->input->post('province_th'));
        $postal_code = $this->security->xss_clean($this->input->post('postal_code'));
        $phone = $this->security->xss_clean($this->input->post('phone'));
        $mobile_phone = $this->security->xss_clean($this->input->post('mobile_phone'));
        $email = $this->security->xss_clean($this->input->post('email'));
        $website = $this->security->xss_clean($this->input->post('website'));

        $sql = "UPDATE ci_profile 
            SET 
                firstname_en='$firstname_en', firstname_th='$firstname_th', lastname_en='$lastname_en', lastname_th='$lastname_th', title_en = '$title_en', title_th='$title_th', gender='$gender',
                street_th='$street_th', sub_district_th='$sub_district_th', district_th='$district_th', province_th='$province_th', postal_code='$postal_code',
                phone='$phone', mobile_phone='$mobile_phone', email='$email', website='$website' 
            WHERE researcher_key = $researcher_key;";
        $this->db->query($sql);
    }

    public function insert_profile() {
        $researcher_key = $this->security->xss_clean($this->input->post('researcher_key'));
        $firstname_en = $this->security->xss_clean($this->input->post('firstname_en'));
        $firstname_th = $this->security->xss_clean($this->input->post('firstname_th'));
        $lastname_en = $this->security->xss_clean($this->input->post('lastname_en'));
        $lastname_th = $this->security->xss_clean($this->input->post('lastname_th'));
        $title_en = $this->security->xss_clean($this->input->post('title_en'));
        $title_th = $this->security->xss_clean($this->input->post('title_th'));
        $gender = $this->security->xss_clean($this->input->post('gender'));

        $street_th = $this->security->xss_clean($this->input->post('street_th'));
        $sub_district_th = $this->security->xss_clean($this->input->post('sub_district_th'));
        $district_th = $this->security->xss_clean($this->input->post('district_th'));
        $province_th = $this->security->xss_clean($this->input->post('province_th'));
        $postal_code = $this->security->xss_clean($this->input->post('postal_code'));
        $phone = $this->security->xss_clean($this->input->post('phone'));
        $mobile_phone = $this->security->xss_clean($this->input->post('mobile_phone'));
        $email = $this->security->xss_clean($this->input->post('email'));
        $website = $this->security->xss_clean($this->input->post('website'));
        
        $sql="INSERT INTO ci_profile 
              VALUES (0, $researcher_key, '$firstname_en', '$firstname_th', '$lastname_en', '$lastname_th', '$title_en', '$title_th', '$gender',
                      '', '$street_th', '', '$sub_district_th', '', '$district_th', '', '$province_th', '$postal_code', '$phone', '$mobile_phone', '$email', '$website');";
        $this->db->query($sql);
    }

}
