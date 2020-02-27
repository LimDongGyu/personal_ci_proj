<?php defined('BASEPATH') OR exit('No direct script access allowed');

//컨트롤러의 파일생성은 기본적으로 주소창의 주소 확장입니다.
//간단하게 말해 Main.php를 만들고 class를 설정하였다면 "URL/index.php/main"으로 접속 가능합니다.
//내부 function도 주소 확장입니다. "URL/index.php/main"로 접속하였다면 function index()가 기본적으로 실행됩니다.
//내부에 public function good() 함수를 추가하였다면 "URL/index.php/main/good"으로 실행됩니다.


class Skillpayload{
    public $intentId, $intentName;

    public function setIntentId($ids){
        $this->intentId = $ids;
    }
    public function getIntentId(){
        return $this->intentId;
    }    
    public function setIntentName($Names){
        $this->intentName = $Names;
    }
    public function getIntentName(){
        return $this->intentName;
    }
}


class Test extends CI_Controller { 
    
    /* public $skillPayload = array(
        'intent' => array(
            'id' => '',
            'name' => '',
            'extra' => array(
                'code' => '',
                'message' => ''
            )
        ),
        'userRequest' => array(
            'timezone' => '',
            'block' => array(
                'id' => '',
                'name' => ''
            ),
            'utterance' => '',
            'lang' => '',
            'user' => array(
                'id' => '',
                'type' => '',
                'properties' => array(
                    'plusfriendUserKey' => '',
                    'appUserId' => ''
                )
            )
        ),
        'bot' => array(
            'id' => '',
            'name' => ''
        ),
        'action' => array(
            'id' => '',
            'name' => '',
            'params' => '',
            'detailParams' => '',
            'clientExtra' => ''
        ),
        'context' => []
    );   */  

	function __construct() {       
        parent::__construct();
    }

    //index 함수 설정은 "URL/index.php/main" 또는 "URL/index.php/main/index"로 접속가능하게 함
	public function index() {

        //들어오는 타입 이런 형태의 json으로 들어옴
        $sample = (Object)array(
            'intent' => (Object)array(
                'id' => '테스트',
                'name' => '',
                'extra' => (Object)array(
                    'code' => '',
                    'message' => ''
                )
            ),
            'userRequest' => (Object)array(
                'timezone' => '',
                'block' => (Object)array(
                    'id' => '',
                    'name' => ''
                ),
                'utterance' => '',
                'lang' => '',
                'user' => (Object)array(
                    'id' => '',
                    'type' => '',
                    'properties' => (Object)array(
                        'plusfriendUserKey' => '',
                        'appUserId' => ''
                    )
                )
            ),
            'bot' => (Object)array(
                'id' => '',
                'name' => ''
            ),
            'action' => (Object)array(
                'id' => '',
                'name' => '',
                'params' => '',
                'detailParams' => '',
                'clientExtra' => ''
            ),
            'context' => []
        );

        // echo "<pre>";
        // print_r($sample);
        // echo "</pre>";

        $results = print_r($sample, true);
        echo $results;


        $openBuildSkillPayload = '{
            "intent": {
                "id": "test",       
                "name": "test",     
                "extra": {        
                    "code": "1",      
                    "message": "2"     
                }   
            },      
            "userRequest": { 
                "timezone": "",       
                "block": {              
                    "id": "test",
                    "name": "test"
                },          
                "utterance": "test",      
                "lang": "test",          
                "user": {               
                    "id": "test",            
                    "type": "test",          
                    "properties": {        
                        "plusfriendUserKey": "test",  
                        "appUserId": "test" 
                    }
                }
            },
            "bot": {
                "id": "test",
                "name": "test"
            },
            "action": {
                "id": "test",
                "name": "test",
                "params": "test",
                "detailParams": "test",
                "clientExtra": "test"
            },
            "context": []       
        }'; 

        $sample2 = '{ "programmers": [
            { "firstName": "Brett", "lastName":"McLaughlin", "email": "brett@newInstance.com" },
            { "firstName": "Jason", "lastName":"Hunter", "email": "jason@servlets.com" }
        ],
        "authors": [
            { "firstName": "Isaac", "lastName": "Asimov", "genre": "science fiction" },
            { "firstName": "Frank", "lastName": "Peretti", "genre": "christian fiction" }
        ] }';

        // echo var_dump($sample);
    
        // $arr_json_string = json_encode($openBuildSkillPayload);        
        // echo var_dump($openBuildSkillPayload);


        //여기까지 들어오는 데이터임, 여기서 변환을 해서 값을 꺼내와야함
        // $obj_json_string = json_decode($arr_json_string);

        // echo var_dump($obj_json_string);
        // echo $obj_json_string->programmers[0]->firstName;

        // $test = json_encode($obj_json_string);
        // echo var_dump($test);

    }
    

    public function sample(){
        $skillPayload = (Object)array(
            'intent' => (Object)array(
                'id' => '1',
                'name' => '1',
                'extra' => (Object)array(
                    'code' => '1',
                    'message' => '1'
                )
            ),
            'userRequest' => (Object)array(
                'timezone' => '1',
                'block' => (Object)array(
                    'id' => '1',
                    'name' => '1'
                ),
                'utterance' => '1',
                'lang' => '1',
                'user' => (Object)array(
                    'id' => '1',
                    'type' => '1',
                    'properties' => (Object)array(
                        'plusfriendUserKey' => '1',
                        'appUserId' => '1'
                    )
                )
            ),
            'bot' => (Object)array(
                'id' => '1',
                'name' => '1'
            ),
            'action' => (Object)array(
                'id' => '1',
                'name' => '1',
                'params' => '1',
                'detailParams' => '1',
                'clientExtra' => '1'
            ),
            'context' => []
        );

        // $skillPayload->intent->id = 'test';

        // $arr_json_string = json_encode($skillPayload);
        // echo $arr_json_string;


        print_r($skillPayload);
    }


    //json post
    public function postTest(){
        $context = $_POST['context'];
        $name = $_POST['name'];
        // $_POST = json_decode(file_get_contents('php://input'), true);

        // $data = json_decode(file_get_contents('php://input'), true);
        // print_r($data);
        // echo $data["operation"];
    }
}