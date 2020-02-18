<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('Crud_m');
    }

	public function index(){
        $data['result'] = $this->Crud_m->getAllData();
		$this->load->view('crud/crud_v', $data);
    }
    
    public function create(){
        $this->Crud_m->createData();
        redirect('Crud','refresh');
    }


}
