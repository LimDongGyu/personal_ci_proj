<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        // $this->load->model('calendar_m');
    }

	public function index(){
		$this->load->view('calendar/calendar_v');
    }
}
