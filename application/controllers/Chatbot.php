<?php
//컨트롤러의 파일생성은 기본적으로 주소창의 주소 확장입니다.
//간단하게 말해 Main.php를 만들고 class를 설정하였다면 "URL/index.php/main"으로 접속 가능합니다.
//내부 function도 주소 확장입니다. "URL/index.php/main"로 접속하였다면 function index()가 기본적으로 실행됩니다.
//내부에 public function good() 함수를 추가하였다면 "URL/index.php/main/good"으로 실행됩니다.

header('Content-Type : application/json; charset=utf-8');


class Chatbot extends CI_Controller {

	function __construct() {       
        parent::__construct();
    //   $this->load->database();
    //   $this->load->helper(array('url', 'date'));
        session_start();
    }

    //index 함수 설정은 "URL/index.php/main" 또는 "URL/index.php/main/index"로 접속가능하게 함
	public function index() {
      // $this->load->model 명령어는 /application/models 폴더를 탐색한다고 이해하셔도 됩니다.
      // model('Main_model')에서 Main_model은 Main_model.php 파일을 찾겠다는 겁니다.
      // $this->Main_model->test();는 로드된 Main_model.php에서 test 함수를 실행하겠다는 뜻입니다.
        // $this->load->model('Main_model');
        // $this->Main_model->test();
        // $this->load->view('chatbot_v');

        
        //payload 가져오기
        //http body의 raw data 읽기전용으로 가져오기
        $raw_post_data = file_get_contents('php://input');
        // $raw_post_array = explode('&', $raw_post_data);

        //string to json
        $skillPayload = json_decode($raw_post_data);
        
        //변수 형태 보기
        print_r($skillPayload);

        //skillPayload 값 가져오는 방식
        // echo $skillPayload->intent->id;
        // echo $skillPayload->userRequest->utterance;

        $data = array(
            'block_id'=>$skillPayload->intent->id,
            'block_name'=>$skillPayload->intent->name,
            'utterance'=>$skillPayload->userRequest->utterance
        );

        $query = $this->db->insert('chatbot_log', $data);



        //스킬응답
        //json타입으로 출력
        // echo json_encode($json_post_data, JSON_UNESCAPED_UNICODE);

        // $simpleText = (Object)array(
        //     "version"=> "2.0",
        //     "template"=> (Object)array(
        //         "outputs"=>array(
        //             (Object)array(
        //                 "simpleText"=>(Object)array(
        //                     "text" => "심플텍스트"
        //             )
        //             )
        //         )
        //     )
        // );

        // echo json_encode($simpleText, JSON_UNESCAPED_UNICODE);
    }
}