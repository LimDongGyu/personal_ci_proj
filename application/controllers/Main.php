<?php
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
    // $this->load->view('header_v');
    $this->load->view('login_v');
  }

  // fb_login
  function fb_login(){
    $this->load->view('header_v');
    $this->load->view('login_v');
  }

  function register(){
    // $this->load->view('header_v');
    $this->load->view('register_v');
  }

  function info(){
    $id = $_SESSION['user_id'];
    $this->load->model('board_m');
		$posts_user = $this->board_m->posts_require_user($id);
		$this->load->view('header_v');
		$this->load->view('info_v', array('posts_user'=>$posts_user));
  }

  function board(){
    $this->load->helper('url');
    $this->load->model('board_m');
    $posts_all = $this->board_m->posts_require_all();
    $this->load->view('header_v');
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
		$this->load->view
        ('post_v',
          array(
            'post'=>$post,
            'comment'=>$comment
          )
        );
  }



  /**
     * 목록 불러오기
     */
    public function lists() {
      $this->load->library('pagination');

      // 페이지 네이션 설정
      $config['base_url'] = '/main/lists/page';
      // 페이징 주소
      $config['total_rows'] = $this -> board_m -> get_list($this -> uri -> segment(3), 'count');
      // 게시물 전체 개수
      $config['per_page'] = 5;
      // 한 페이지에 표시할 게시물 수
      $config['uri_segment'] = 5;
      // 페이지 번호가 위치한 세그먼트

      // 페이지네이션 초기화
      $this->pagination->initialize($config);

      // 페이지 링크를 생성하여 view에서 사용하 변수에 할당
      $data['pagination'] = $this->pagination->create_links();

      // 게시물 목록을 불러오기 위한 offset, limit 값 가져오기
      $page = $this->uri->segment(5, 1);

      if ($page > 1) {
          $start = (($page / $config['per_page'])) * $config['per_page'];
      } else {
          $start = ($page - 1) * $config['per_page'];
      }

      $limit = $config['per_page'];

      $data['list'] = $this->board_m->get_list($this->uri->segment(3), '', $start, $limit);
      $this->load->view('board_v', $data);
  }
}