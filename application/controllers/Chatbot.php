<?php
    header('Content-Type : application/json; charset=utf-8');

class Chatbot extends CI_Controller {

	function __construct() {       
        parent::__construct();
        $this->load->library('basicCard');
        $this->load->library('skillResponse');
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

        if(!empty($user_data['custom_name']) || !empty($user_data['custom_phone']) || !empty($user_data['custom_memo']) || !($user_data['custom_car'] == null || "")){
            $query = $this->db->insert('chatbot_customInfo', $user_data);
        }else{
        }

        $basicCard = (Object)array(
            "version"=>"2.0",
            "template"=>(Object)array(
                "outputs"=>array(
                    (Object)array(
                        "basicCard"=>(Object)array(
                            "title"=>"예약을 진행하기 위해선 고객정보가 필요합니다.",
                            "description"=>$description,
                            "thumbnail"=>(Object)array(
                                "imageUrl"=>"https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg"
                            ),
                            "buttons"=>array(
                                (Object)array(
                                    "label"=>"확인",
                                    "action"=>"block",
                                    "blockId"=>"5e608fe803ec21000146e018",
                                ),
                                (Object)array(
                                    "label"=>"취소",
                                    "action"=>"block",
                                    "blockId"=>"5e61ff4792b3de000166cdc9",
                                )
                            )
                        )
                    )
                ),                
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


    public function getMainCategory(){
        $ch = curl_init();      
        $url = 'http://15.164.189.152/chatbotApi/cb_main_reser';
    
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'User-Agent: Mozilla/5.0',
        ));

        $output = curl_exec($ch);
        curl_close($ch);

        $categories = json_decode($output);
        $cnt = count($categories->categorys);

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
            
            array_push($carouselTray->carousel->items[(int)($i/3)-1]->buttons, (Object)array(
                "action"=>"block",
                "label"=>$categories->categorys[$i-3]->mainName,
                "blockId"=>"5e608fe803ec21000146e018",      //중분류 선택하는 블록으로 연결할 것
                "extra"=>(Object)array(
                    "category_id"=>$categories->categorys[$i-3]->id,
                    "chain_id"   =>$categories->categorys[$i-3]->chainId
                )
            ));    
            
            $subName = '';

            if(strlen($subName = $categories->categorys[$i-3]->subName)>17){
                $subName = iconv_substr($subName = $categories->categorys[$i-3]->subName, 0, 15)."...";
            }else{
                $subName = $categories->categorys[$i-3]->subName;
            }            

            $carouselTray->carousel->items[(int)($i/3)-1]->description 
                .= "▶ ". $categories->categorys[$i-3]->mainName
                ."\n\t : "
                .$subName."\n";
        }

        $res = (Object)array(
            "version"=> "2.0",
            "template"=> (Object)array(
                "outputs"=>array(
                ),
                "quickReplies"=>array((Object)array(
                    "label"=>"처음으로",
                    "action"=>"block",
                    "blockId"=>"5e61ff4792b3de000166cdc9"
                ))
            )
        );
        array_push($res->template->outputs, $carouselTray);
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
        
    }


    //예약하기 - 이벤트 리스트
    public function eventMainCategories(){
        $ch = curl_init();      
        $url = 'http://15.164.189.152/chatbotApi/cb_event_main';
    
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'User-Agent: Mozilla/5.0',
        ));

        $output = curl_exec($ch);
        curl_close($ch);

        $events = json_decode($output);

        $skillResponse = new SkillResponse();
        
        $description  = "기간 : ".$events->event_cha[0]->startDate."~".$events->event_cha[0]->endDate;
        $description .= "\n이벤트 대상 : 해당 기간동안 방문 고객";
        $description .= "\n모든 이벤트 상품 VAT 10% 별도";

        //banner
        $basicCard_1 = new BasicCard();
        $basicCard_1->setContent($events->event_cha[0]->chaName, $description);
        $basicCard_1->addThumbnail("http://k.kakaocdn.net/dn/jl66c/btqCzA4m4vI/b2uP19jJ8oEas8DFdl7iAK/2x1.jpg", "이미지가 없을 때 나오는 텍스트", true, 100, 100, "http://gangnam.museclinic.co.kr/index.php/reser");        
        array_push($skillResponse->template->outputs, array("basicCard"=>$basicCard_1));

        //eventMain
        $cnt = count($events->groups);

        $carouselTray = (Object)array(
            "carousel"=>(Object)array(
                "type"=>"basicCard",
                "items"=>array(
                )
            )
        );

        for($i=0; $i < $cnt; $i++){
            array_push($carouselTray->carousel->items, (Object)array(
                "title"=>$events->groups[$i]->groupName,
                "description"=>$events->groups[$i]->groupSubName,
                "buttons"=>array(
                    (Object)array(
                        "label"=>$events->groups[$i]->groupName,
                        "action"=>"block",
                        "blockId"=>"5e608fe803ec21000146e018",
                        "extra"=>(Object)array(
                                "id"=>$events->groups[$i]->id,
                                "chainId"=>$events->groups[$i]->chainId
                        )                        
                    )
                )
            ));
        }
        array_push($skillResponse->template->outputs, $carouselTray);
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }


    //봇응답 예시
    public function test(){

        //skillPayload 가져오기
        $raw_post_data = file_get_contents('php://input');
        $verifyPayload = json_decode($raw_post_data);

        //고객정보 파라미터
        $user_data = array(
            'custom_name'=>$skillPayload->action->params->custom_name,
            'custom_phone'=>$skillPayload->action->params->custom_phone,
            'custom_car'=>$skillPayload->action->params->custom_car,
            'custom_memo'=>$skillPayload->action->params->custom_memo,
        );

        // 고객정보 노출 예시)
        // $description  = "입력하신 정보가 맞습니까?";
        // $description .= "\n\n▶ 이름: ".$user_data['custom_name'];
        // $description .= "\n▶ 전화번호: ".$user_data['custom_phone'];
        // $description .= "\n▶ 차량주차 대수: ".$user_data['custom_car'];
        // $description .= "\n▶ 메모: ".$user_data['custom_memo'];

        //고객정보 저장
        // $query = $this->db->insert('chatbot_customInfo', $user_data);

        
        //봇응답메시지 생성
        $skillResponse = new SkillResponse();

        //봇응답 - simpleText
        //$skillResponse->addSimpleText("여기에 내용을 입력하시면 됩니다.");

        //봇응답 - simpleImage
        //$skillResponse->addSimpleImage("url", "altText=0");

        //봇응답 - basicCard
        // $basicCard = new BasicCard();
        // $basicCard->setContent("title", "descrpition");
        // $basicCard->addThumbnail("imageUrl", "altText=0", fixedRatio=false, width=200, height=100, "$link=''"
        // $basicCard->addButton("label", "action", "detail");
        // $basicCard->addExtra(index, "key", "value");
        // array_push($skillResponse->template->outputs, array("basicCard"=>$basicCard));

        //봇응답 - quickReplies
        // $skillResponse->addQuickReplies("label", "action", "detail");
        // $skillResponse->addQuickExtra(index, "key", "value");


        //예시
        $basicCard = new BasicCard();
        $basicCard->setContent("타이틀입니다.", "내용입니다.");
        $basicCard->addThumbnail("https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg", "이미지가 없을 때 나오는 텍스트", true, 100, 100, "http://naver.com");        
        $basicCard->addButton("블록연결", "block", "5e608fe803ec21000146e018");
        $basicCard->addButton("링크연결", "webLink", "http://naver.com");
        $basicCard->addButton("전화연결", "phone", "010-2208-5026");
        array_push($skillResponse->template->outputs, array("basicCard"=>$basicCard));

        $skillResponse->addQuickReplies("블록연결", "block", "5e608fe803ec21000146e018");
        $skillResponse->addQuickReplies("텍스트발화", "message", "사용자 발화하고 똑같음, 주의");

        $basicCard->addExtra(0, "key", "value");
        $basicCard->addExtra(0, "key2", "value2");
        $basicCard->addExtra(1, "key3", "value3");

        $skillResponse->addQuickExtra(0, "key", "value");
        $skillResponse->addQuickExtra(0, "key3", "value3");
        $skillResponse->addQuickExtra(1, "key2", "value2");

        //봇응답메시지 POST JSON
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);        
    }
}   