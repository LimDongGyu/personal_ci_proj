<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('Crud_m');
    }

	public function index($offset=0){
        $this->load->library('pagination');
        $config['base_url'] = site_url('Crud/index/');
        $config['total_rows'] = $this->Crud_m->countAll();
        $config['per_page'] = 3;
        $this->pagination->initialize($config);

        $data['result'] = $this->Crud_m->getAllData($config['per_page'], $offset);
		$this->load->view('crud/crud_v', $data);
    }
    
    public function create(){
        $this->Crud_m->createData();
        redirect('Crud','refresh');
    }

    public function edit($id){
        $data['row'] = $this->Crud_m->getData($id);
        $this->load->view('crud/crudEdit_v', $data);
    }

    public function update($id){
        $this->Crud_m->updateData($id);
        redirect('crud','refresh');   
    }

    public function delete($id){
        $this->Crud_m->deleteData($id);
        
        redirect('crud','refresh');
        
    }

}
