<?php
class Admin extends CI_Controller{
    public function index(){
        $data['hello'] = "Hello admin.";
        $this->load->view('admin/admin', $data);
    }
            
    
} 
