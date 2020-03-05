<?php
    header('Content-Type : application/json; charset=utf-8');

class Chatbot extends CI_Controller {

	function __construct() {       
        parent::__construct();
    }


    //챗봇 로그저장
	public function index() {
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);        

        $data = array(
            'block_id'=>$skillPayload->intent->id,
            'block_name'=>$skillPayload->intent->name,
            'utterance'=>$skillPayload->userRequest->utterance
        );
        $query = $this->db->insert('chatbot_log', $data);
        $simpleText = (Object)array(
            "version"=> "2.0",
            "template"=> (Object)array(
                "outputs"=>array(
                    (Object)array(
                        "simpleText"=>(Object)array(
                            "text" => "심플텍스트"
                    )
                    )
                )
            )
        );
        echo json_encode($simpleText, JSON_UNESCAPED_UNICODE);
    }


    //고객정보 수집
    public function custInfoCollection(){
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);

        //고객정보 파라미터
        $user_data = array(
            'custom_name'=>$skillPayload->action->params->custom_name,
            'custom_phone'=>$skillPayload->action->params->custom_phone,
            'custom_car'=>$skillPayload->action->params->custom_car,
            'custom_memo'=>$skillPayload->action->params->custom_memo,
        );

        $description  = "입력하신 정보가 맞습니까?";
        $description .= "\n\n▶ 이름: ".$user_data['custom_name'];
        $description .= "\n▶ 전화번호: ".$user_data['custom_phone'];
        $description .= "\n▶ 차량주차 대수: ".$user_data['custom_car'];
        $description .= "\n▶ 메모: ".$user_data['custom_memo'];

        $query = $this->db->insert('chatbot_customInfo', $user_data);

        $basicCard = (Object)array(
            "version"=>"2.0",
            "template"=>(Object)array(
                "outputs"=>array(
                    (Object)array(
                        "basicCard"=>(Object)array(
                            "title"=>"베이직카드 타이틀",
                            "description"=>$description,
                            // "thumbnail"=>(Object)array(
                            //     "imageUrl"=>""
                            // )
                            "buttons"=>array(
                                (Object)array(
                                    "label"=>"확인",
                                    "action"=>"block",
                                    "blockId"=>"5e608fe803ec21000146e018",
                                ),
                                (Object)array(
                                    "label"=>"취소",
                                    "action"=>"block",
                                    "blockId"=>"5e6074e8f4b63c0001637dc1",
                                )
                            )
                        )
                    )
                ),

                "quickReplies"=>array(
                    (Object)array(
                        "action"=>"block",     //text | url | block
                        "label"=>"확인",
                        "blockId"=>"5e608fe803ec21000146e018",
                        // "extra"=>(Object)array()
                    ),
                    (Object)array(
                        "action"=>"block",     //text | url | block
                        "label"=>"취소",
                        "blockId"=>"5e6074e8f4b63c0001637dc1",
                        // "extra"=>(Object)array()
                    ),
                )
            )
        );

        echo json_encode($basicCard, JSON_UNESCAPED_UNICODE);
    }


    //검증API 테스트
    public function verifyApi(){
        $raw_post_data = file_get_contents('php://input');
        $verifyPayload = json_decode($raw_post_data);
        $stat  = "SUCCESS";         //"SUCCESS|FAIL|ERROR|IGNORE"
        $value = "";

        //차량주차
        if($verifyPayload->utterance == "필요"){
            $stat  = "SUCCESS";
            $value = 1;
        }else if($verifyPayload->utterance == "불필요"){
            $stat  = "SUCCESS";
            $value = 0;
        }else{
            $stat = "FAIL";
        }

        $res = array(
            "status"=>$stat,
            "value"=>$value,
        );

        echo json_encode($res, JSON_UNESCAPED_UNICODE);
    }


    //예약하기 - 시술 추가하기 메인
    public function reserMain(){
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);

        //main 시술 select --> Api --> 결과를 챗봇 답변 형태로 꾸며서 제작

        $simpleText = (Object)array(
            "version"=> "2.0",
            "template"=> (Object)array(
                "outputs"=>array(
                    (Object)array(
                        "simpleText"=>(Object)array(
                            "text" => "시술추가하기 블록 답변"
                    )
                    )
                )
            )
        );
        echo json_encode($simpleText, JSON_UNESCAPED_UNICODE);
    }


    //예약하기 대분류
    public function categories(){
        $raw_post_data = file_get_contents('php://input');
        $verifyPayload = json_decode($raw_post_data);
        
        $var = (Object)array(
            "categorys"=> array(
                (Object)array(
                    "id" => "87",
                    "chainId" => "1",
                    "mainName" => "인기 시술"
                ), 
                (Object)array(
                    "id" => "88",
                    "chainId" => "2",
                    "mainName" => "인기 시술2"
                ), 
                (Object)array(
                    "id" => "89",
                    "chainId" => "3",
                    "mainName" => "인기 시술3"
                ),
                (Object)array(
                    "id" => "89",
                    "chainId" => "3",
                    "mainName" => "인기 시술3"
                ),
                (Object)array(
                    "id" => "89",
                    "chainId" => "3",
                    "mainName" => "인기 시술3"
                ),
                (Object)array(
                    "id" => "89",
                    "chainId" => "3",
                    "mainName" => "인기 시술3"
                ),
                (Object)array(
                    "id" => "89",
                    "chainId" => "3",
                    "mainName" => "인기 시술3"
                )
            )
        );

        $cnt = count($var->categorys);

        $carouselTray = (Object)array(
            "carousel"=>(Object)array(
                "type"=>"basicCard",
                "items"=>array(
                )
            )
        );

        for($i=3; $i < $cnt+3; $i++){
            if(is_int($i/3)){
                array_push($carouselTray->carousel->items, (Object)array(
                    "title"=>"",
                    "description"=>"다음과 같은 시술을 선택하실 수 있습니다.\n\n",
                    "buttons"=>array()
                ));
            }
            
            //버튼 생성
            array_push($carouselTray->carousel->items[(int)($i/3)-1]->buttons, (Object)array(
                "action"=>"block",
                "label"=>$var->categorys[$i-3]->mainName,
                "blockId"=>"5e608fe803ec21000146e018",      //중분류 선택하는 블록으로 연결할 것
                "extra"=>(Object)array(
                    "category_id"=>$var->categorys[$i-3]->id,
                    "chain_id"   =>$var->categorys[$i-3]->chainId
                )
            ));    
            
            $carouselTray->carousel->items[(int)($i/3)-1]->description .= "▶". $var->categorys[$i-3]->mainName. "\n";
        }

        //봇 응답
        $res = (Object)array(
            "version"=> "2.0",
            "template"=> (Object)array(
                "outputs"=>array(
                )
            )
        );
        array_push($res->template->outputs, $carouselTray);
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
    }



    //클래스 -> 차후 작업할 것
    public function tray(){
        $basicCardTray = (Object)array(
            "title"=>"",
            "description"=>"",
            // "thumbnail"=>(Object)array(
            //     "imageUrl"=>""
            // ),
            "buttons"=>array(
                // (Object)array(
                //     "action"=>"block",
                //     "label"=>"categorys 내용 들어갈 것",
                //     "blockId"=>"5e608fe803ec21000146e018",
                //     "extra"=>(Object)array(
                //         "categories_id_1"=>""
                //     )
                // )
            )
        );

        $buttonTray = (Object)array(
            "action"=>"block",
            "label"=>"다음과 같은 시술을 선택하실 수 있습니다.\n\n",
            "blockId"=>"5e608fe803ec21000146e018",      //중분류 선택하는 블록으로 연결할 것
            // "extra"=>(Object)array(
            //     "categories_id_1"=>""
            // )
        );

    }

    //스킬 답변 포맷
    public function sample(){
        $simpleText = (Object)array(
            "version"=> "2.0",
            "template"=> (Object)array(
                "outputs"=>array(
                    (Object)array(
                        "simpleText"=>(Object)array(
                            "text" => ""
                    )
                    )
                )
            )
        );

        $basicCard = (Object)array(
            "version"=>"2.0",
            "template"=>(Object)array(
                "outputs"=>array(
                    (Object)array(
                        "basicCard"=>(Object)array(
                            "title"=>"",
                            "description"=>"",
                            "thumbnail"=>(Object)array(
                                // "imageUrl"=>""
                            ),
                            "buttons"=>array(
                                (Object)array(
                                    "label"=>"",
                                    "action"=>"",
                                    // "blockId"=>"",
                                ),
                                (Object)array(
                                    "label"=>"",
                                    "action"=>"",
                                    // "blockId"=>"",
                                )
                            )
                        )
                    )
                )
            )
        );
    }
}