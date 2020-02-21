<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_m extends CI_Model {
    
    public function __construct(){
        $this->load->database();
    }

    function createData(){
        $data = array(
            'testi_context'=>$this->input->post('testi_context'),
            'testi_title'=>$this->input->post('testi_title'),
            'testi_description'=>$this->input->post('testi_description'),
            'testi_img'=>$this->input->post('testi_img'),
        );

        $this->db->insert('testi_card', $data);
    }

    function updateData($id){
        $data = array(
            'testi_context'=>$this->input->post('testi_context'),
            'testi_title'=>$this->input->post('testi_title'),
            'testi_description'=>$this->input->post('testi_description'),
            'testi_img'=>$this->input->post('testi_img'),
        );
        $this->db->where('testi_id', $id);
        $this->db->update('testi_card', $data);
    }

    function getData($id){
        $query = $this->db->query('SELECT * FROM testi_card WHERE `testi_id`='.$id);
        return $query->row();
    }

    function countAll(){
        $query = $this->db->query('SELECT * FROM testi_card');
        return $query->num_rows();
    }

    function getAllData(){
        $query = $this->db->query('SELECT * FROM testi_card ORDER BY testi_regist_date DESC');
        return $query->result();
    }

    function deleteData($id){
        $this->db->where('testi_id', $id);
        $this->db->delete('testi_card');
    }
}
