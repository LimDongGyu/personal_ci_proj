<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_m extends CI_Model {
    
    public function __construct(){
        $this->load->database();
    }

    
    function createData(){
        $data = array(
            'lastName'=>$this->input->post('lastName'),
            'firstName'=>$this->input->post('firstName'),
            'birthdate'=>$this->input->post('birthdate'),
            'contactNo'=>$this->input->post('contactNo'),
            'bio'=>$this->input->post('bio')
        );

        $this->db->insert('tbl_name', $data);
    }

    function getAllData(){
        $query = $this->db->query('SELECT * FROM tbl_name');
        return $query->result();
    }
}
