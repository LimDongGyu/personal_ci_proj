<?php defined('BASEPATH') OR exit('No direct script access allowed');

//컨트롤러의 파일생성은 기본적으로 주소창의 주소 확장입니다.
//간단하게 말해 Main.php를 만들고 class를 설정하였다면 "URL/index.php/main"으로 접속 가능합니다.
//내부 function도 주소 확장입니다. "URL/index.php/main"로 접속하였다면 function index()가 기본적으로 실행됩니다.
//내부에 public function good() 함수를 추가하였다면 "URL/index.php/main/good"으로 실행됩니다.

class Main extends CI_Controller {

	function __construct() {       
      parent::__construct();
      $this->load->database();
      $this->load->helper(array('url', 'date'));
      session_start();
    }

    //index 함수 설정은 "URL/index.php/main" 또는 "URL/index.php/main/index"로 접속가능하게 함
	public function index() {
      // $this->load->model 명령어는 /application/models 폴더를 탐색한다고 이해하셔도 됩니다.
      // model('Main_model')에서 Main_model은 Main_model.php 파일을 찾겠다는 겁니다.
      // $this->Main_model->test();는 로드된 Main_model.php에서 test 함수를 실행하겠다는 뜻입니다.
	  $this->load->model('Main_model');
	  $this->Main_model->test();
  }

  function layout(){
    $this->load->helper('url');
    $this->load->view('layout_header_v');
    $this->load->view('layout_v');
  }
  
  // login
  function login(){
    $this->load->view('header_v');
    $this->load->view('login_v');
  }

  // fb_login
  function fb_login(){
    $this->load->view('header_v');
    $this->load->view('login_v');
  }

  function register(){
    $this->load->view('header_v');
    $this->load->view('register_v');
  }

  function info(){
    // session_start();
    $id = $_SESSION['user_id'];
    // session_destroy();

    $this->load->model('board_m');
		$posts_user = $this->board_m->posts_require_user($id);
		$this->load->view('header_v');
		$this->load->view('info_v', array('posts_user'=>$posts_user));
  }

  function board(){
    //session_start();
    $this->load->helper('url');
		$this->load->model('board_m');
		$posts_all = $this->board_m->posts_require_all();
    // $this->load->view('header_v');
    $this->load->view('layout_header_v');
    $this->load->view('layout_nav_v');
    $this->load->view('board_v', array('posts_all'=>$posts_all));
  }

  function write(){
		$this->load->view('header_v');
    $this->load->view('write_v');
	}

	function edit($id){
		$this->load->model('board_m');
		$data = $this->board_m->posts_require($id);
		$this->load->view('header_v');
		$this->load->view('edit_v', array('data'=>$data));
	}

	function post($id){
		$this->load->model('board_m');
		$post = $this->board_m->posts_require($id);
		$comment = $this->board_m->posts_require_comment($id);
		$this->load->view('header_v');
		// $this->load->view('post_v', array('post'=>$post));
		$this->load->view
        ('post_v',
          array(
            'post'=>$post,
            'comment'=>$comment
          )
        );
  }
}