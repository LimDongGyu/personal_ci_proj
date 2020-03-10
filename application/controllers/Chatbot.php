<?php
    header('Content-Type : application/json; charset=utf-8');
    $url_api = "http://museapi.mement.net/chatbotApi";
?>

<?php
class Chatbot extends CI_Controller {
	function __construct() {       
        parent::__construct();
        $this->load->library('carousel');
        $this->load->library('basicCard');
        $this->load->library('commerseCard');
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


    //회원정보 중복확인 및 저장
    public function custInfoCollection(){
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);

        global $url_api;
        $url = $url_api. "/cb_customer_confirm";
        $data['phone'] = $skillPayload->action->params->custom_phone;
        $output = $this->curlPost($url, $data);
        $confirm = json_decode($output);
        $cnt = count($confirm->customer);

        $skillResponse = new SkillResponse();

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

        if($cnt == 1){
            if(!empty($user_data['custom_name']) || !empty($user_data['custom_phone']) || !empty($user_data['custom_memo']) || !($user_data['custom_car'] == null || "")){
                $query = $this->db->insert('chatbot_customInfo', $user_data);
            }else{
            }

            $basicCard_1 = new BasicCard();
            $basicCard_1->setContent("예약을 진행하기 위해선 고객정보가 필요합니다.", $description);
            $basicCard_1->addThumbnail("https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg", "altText", true, 100, 100, "http://gangnam.museclinic.co.kr/index.php/reser");        
            $basicCard_1->addButton("확인", "block", "5e608fe803ec21000146e018");
            $basicCard_1->addButton("취소", "block", "5e61ff4792b3de000166cdc9");
            $basicCard_1->addExtra(0, "custom_name", $skillPayload->action->params->custom_name);
            $basicCard_1->addExtra(0, "custom_phone", $skillPayload->action->params->custom_phone);
            $basicCard_1->addExtra(0, "custom_car", $skillPayload->action->params->custom_car);
            $basicCard_1->addExtra(0, "custom_memo", $skillPayload->action->params->custom_memo);
            array_push($skillResponse->template->outputs, array("basicCard"=>$basicCard_1));
        }
        else if($cnt > 0){
            $basicCard_1 = new BasicCard();
            $basicCard_1->setContent("예약을 진행하기 위해선 고객정보가 필요합니다.", $description);
            $basicCard_1->addThumbnail("https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg", "altText", true, 100, 100, "http://gangnam.museclinic.co.kr/index.php/reser");        
            array_push($skillResponse->template->outputs, array("basicCard"=>$basicCard_1));

            $carouselTray = (Object)array(
                "carousel"=>(Object)array(
                    "type"=>"basicCard",
                    "items"=>array(
                    )
                )
            );
    
            for($i=0; $i < $cnt; $i++){
                $date = $confirm->customer[$i]->birth_date;
                $date = substr($date, 0, 4) ."년 ". substr($date, 5, 2) ."월 " . substr($date, 8, 2) . "일\n";

                $description ="";
                $desciption = "본인을 확인해주세요. \n\n";
                $desciption .= "핸드폰 : ". $confirm->customer[$i]->phone ."\n";
                $desciption .= "생년월일 : ". $date. "\n";
    
                array_push($carouselTray->carousel->items, (Object)array(
                    "title"=>"",
                    "thumbnail"=>(Object)array(
                        "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg"
                    ),
                    "description"=>$desciption,
                    "buttons"=>array(
                        (Object)array(
                            "label"=>"선택",
                            "action"=>"block",
                            "blockId"=>"5e608fe803ec21000146e018",
                            "extra"=>(Object)array(
                                "custom_name"=>$skillPayload->action->params->custom_name,
                                "custom_phone"=>$confirm->customer[$i]->phone,
                                "custom_car"=>$skillPayload->action->params->custom_car,
                                "custom_memo"=>$skillPayload->action->params->custom_memo,
                            )
                        )
                    )
                ));
            }
            array_push($skillResponse->template->outputs, $carouselTray);
        }else if($cnt == 0){
            $skillResponse->addSimpleText("기존 회원이 아닙니다.");
        }

        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }


    //검증API 차량주자
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
        global $url_api;
        $url = $url_api. "/cb_main_reser";

        $output = $this->curlPost($url);
        $categories = json_decode($output);
        $cnt = count($categories->categorys);

        $skillResponse = new SkillResponse();

        $carouselTray = (Object)array(
            "carousel"=>(Object)array(
                "type"=>"basicCard",
                "items"=>array(
                )
            )
        );

        for($i=0; $i < $cnt; $i++){
            $desciption = "";
            $desciption .= $categories->categorys[$i]->mainName ."\n\n";
            $desciption .= $categories->categorys[$i]->subName ."\n";

            array_push($carouselTray->carousel->items, (Object)array(
                "title"=>"",
                "thumbnail"=>(Object)array(
                    "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg"
                ),
                "description"=>$desciption,
                "buttons"=>array(
                    (Object)array(
                        "label"=>"선택",
                        "action"=>"block",
                        "blockId"=>"5e65d57dc86a5f0001db07db",
                        "extra"=>(Object)array(
                            "categoryId"=>$categories->categorys[$i]->id,
                            "chainId"=>$categories->categorys[$i]->chainId,
                        )
                    )
                )
            ));
        }

        array_push($skillResponse->template->outputs, $carouselTray);
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }


    public function getMainReserMiddles(){
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);

        global $url_api;
        $url = $url_api. "/cb_main_reser_middles";

        $data['categoryId'] = $skillPayload->action->clientExtra->categoryId;
        $output = $this->curlPost($url, $data);
        $middles = json_decode($output);
        $cnt = count($middles->middles);

        $skillResponse = new SkillResponse();

        //방법: 케로셀
        $carouselTray = (Object)array(
            "carousel"=>(Object)array(
                "type"=>"commerceCard",
                "items"=>array(
                )
            )
        );

        for($i=0; $i < $cnt; $i++){
            $description = "";
            $description .= str_replace("<br>", "", $middles->middles[$i]->homePageSubName);
            $price = (int)$middles->middles[$i]->okPrice ? (int)$middles->middles[$i]->okPrice : (int)$middles->middles[$i]->minPrice;
            array_push($carouselTray->carousel->items, (Object)array(
                "title"=>"",
                "description" => $description,  //최대 40자
                "price"=>  $price,
                // "discount"=>10000,
                "currency"=>"won",
                "thumbnails"=>array(
                    (Object)array(
                        "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                        "link"=>(Object)array(
                            "web"=>"http://gangnam.museclinic.co.kr/index.php/reser#"
                        )
                    )
                ),
                "profile"=>(Object)array(
                    "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                    "nickname"=>str_replace("<br>", "", $middles->middles[$i]->homePageMainName)
                ),
                "buttons"=>array(
                    (Object)array(
                        "label"=>"선택",
                        "action"=>"block",
                        "blockId"=>"5e65e5caa04f9b0001891783",
                        "extra"=>(Object)array(
                            "middleId"=>$middles->middles[$i]->middleId
                        )
                    )
                )
            ));
        }

        array_push($skillResponse->template->outputs, $carouselTray);
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }


    public function getMainReserDetail(){
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);

        global $url_api;
        $url = $url_api. "/cb_main_reser_detail";
        $data['middleId'] = $skillPayload->action->clientExtra->middleId;
        $output = $this->curlPost($url, $data);
        $details = json_decode($output);

        $eventCnt = count($details->middles->events);
        $defaultCnt = count($details->middles->defaults);

        $skillResponse = new SkillResponse();
    
        $carouselTray = (Object)array(
            "carousel"=>(Object)array(
                "type"=>"commerceCard",
                "items"=>array(
                )
            )
        );

        for($i=0; $i < $eventCnt; $i++){
            $description = "[이벤트] ";
            $description .= str_replace("<br>", "", $details->middles->events[$i]->itemName)."\n";

            array_push($carouselTray->carousel->items, (Object)array(
                "title"=>"",
                "description" => $description,  //최대 40자
                "price"=> $details->middles->events[$i]->originalPrice,
                "discount"=>((int)$details->middles->events[$i]->originalPrice-(int)$details->middles->events[$i]->discountedPrice),
                "currency"=>"won",
                "thumbnails"=>array(
                    (Object)array(
                        "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                        "link"=>(Object)array(
                            "web"=>"http://gangnam.museclinic.co.kr/index.php/reser#"
                        )
                    )
                ),
                "profile"=>(Object)array(
                    "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                    "nickname"=> $details->middles->events[$i]->startDate." ~ ".$details->middles->events[$i]->endDate
                ),
                "buttons"=>array(
                    (Object)array(
                        "label"=>"선택",
                        "action"=>"block",
                        "blockId"=>"5e671ed39d997a00018bb4ca",
                        "extra"=>(Object)array(
                            "id"=>$details->middles->events[$i]->id,
                            "middleId"=>$details->middles->events[$i]->middleId,
                            "itemName"=>$details->middles->events[$i]->itemName,
                            "price"=>$details->middles->events[$i]->discountedPrice,
                            "startDate"=>$details->middles->events[$i]->startDate,
                            "endDate"=>$details->middles->events[$i]->endDate,
                            "dayOfTheWeek1"=>$details->middles->events[$i]->dayOfTheWeek1,
                            "startTime"=>$details->middles->events[$i]->startTime,
                            "endTime"=>$details->middles->events[$i]->endTime
                        )
                    )
                )
            ));
        }

        for($i=0; $i < $defaultCnt; $i++){
            $description = "";
            $description .= str_replace("<br>", "", $details->middles->defaults[$i]->homePageMainName)."\n";
            $description .= str_replace("<br>", "", $details->middles->defaults[$i]->homePageSubName)."\n";

            array_push($carouselTray->carousel->items, (Object)array(
                "title"=>"",
                "description" => $description,  //최대 40자
                "price"=> $details->middles->defaults[$i]->price,
                // "discount"=>((int)$details->middles->defaults[$i]->originalPrice-(int)$details->middles->events[$i]->discountedPrice),
                "currency"=>"won",
                "thumbnails"=>array(
                    (Object)array(
                        "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                        "link"=>(Object)array(
                            "web"=>"http://gangnam.museclinic.co.kr/index.php/reser#"
                        )
                    )
                ),
                "profile"=>(Object)array(
                    "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                    "nickname"=>"상시 상품"
                ),
                "buttons"=>array(
                    (Object)array(
                        "label"=>"선택",
                        "action"=>"block",
                        "blockId"=>"5e65a49280ea0a000175dc50",
                        "extra"=>(Object)array(
                            "middleId"=>$details->middles->defaults[$i]->middleId,
                        )
                    )
                )
            ));
        }

        array_push($skillResponse->template->outputs, $carouselTray);
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }


    //예약하기 - 이벤트 리스트
    public function eventMainCategories(){
        global $url_api;
        $url = $url_api. "/cb_event_main";
        $output = $this->curlPost($url);
        $events = json_decode($output);

        $skillResponse = new SkillResponse();
        
        $description  = "기간 : ".$events->event_cha[0]->startDate."~".$events->event_cha[0]->endDate;
        $description .= "\n이벤트 대상 : 해당 기간동안 방문 고객";
        $description .= "\n모든 이벤트 상품 VAT 10% 별도";

        //banner
        $basicCard_1 = new BasicCard();
        $basicCard_1->setContent($events->event_cha[0]->chaName, $description);
        $basicCard_1->addThumbnail("https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg", "이미지가 없을 때 나오는 텍스트", true, 100, 100, "http://gangnam.museclinic.co.kr/index.php/reser");        
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
                        "label"=>"선택",
                        "action"=>"block",
                        "blockId"=>"5e65a49280ea0a000175dc50",
                        "extra"=>(Object)array(
                            "dayOfTheWeek"=>$events->groups[$i]->dayOfTheWeek,
                            "groupId"=>$events->groups[$i]->id,
                            "chainId"=>$events->groups[$i]->chainId,
                            "startTime"=>$events->groups[$i]->startTime,
                            "endTime"=>$events->groups[$i]->endTime,
                            "startDate"=>$events->event_cha[0]->startDate,
                            "endDate"=>$events->event_cha[0]->endDate,
                            // "title"=>$events->groups[$i]->groupName,
                        )                        
                    )
                )
            ));
        }
        array_push($skillResponse->template->outputs, $carouselTray);
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }


    public function eventGroupCategories(){
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);
        
        $data['groupId'] = $skillPayload->action->clientExtra->groupId;
        $data['chainId'] = $skillPayload->action->clientExtra->chainId;

        global $url_api;
        $url = $url_api. "/cb_event_groups";
        $output = $this->curlPost($url, $data);
        $items = json_decode($output);
        $cnt = count($items->items);

        $skillResponse = new SkillResponse();

        //최종 : 노출 글자수를 줄이거나, 한 단계 더 가서 자세히보기를 작성해야함
        //방법 1 :
        // 커머스는 글자수 제한(타이틀: 15자, 내용: 40자)
        $carouselTray = (Object)array(
            "carousel"=>(Object)array(
                "type"=>"commerceCard",
                "items"=>array(
                )
            )
        );

        for($i=0; $i < $cnt; $i++){
            $description = "";
            $description .= str_replace("<br>", "", $items->items[$i]->itemName)."\n";
            $description .= str_replace("<br>", "", $items->items[$i]->itemSubName);

            array_push($carouselTray->carousel->items, (Object)array(
                "title"=>"",
                "description" => $description,  //최대 40자
                "price"=> $items->items[$i]->originalPrice,
                "discount"=>((int)$items->items[$i]->originalPrice-(int)$items->items[$i]->discountedPrice),
                "currency"=>"won",
                "thumbnails"=>array(
                    (Object)array(
                        "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                        "link"=>(Object)array(
                            "web"=>"http://gangnam.museclinic.co.kr/index.php/reser#"
                        )
                    )
                ),
                "profile"=>(Object)array(
                    "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                    "nickname"=>str_replace("<br>", "", $items->items[$i]->itemName)
                ),
                "buttons"=>array(
                    (Object)array(
                        "label"=>"선택",
                        "action"=>"block",
                        "blockId"=>"5e671ed39d997a00018bb4ca",
                        "extra"=>(Object)array(
                            // "groupId"=>$skillPayload->action->clientExtra->groupId,
                            "itemName"=>str_replace("<br>", "", $items->items[$i]->itemName),
                            "price"=>$items->items[$i]->discountedPrice,
                            "dayOfTheWeek1"=>$skillPayload->action->clientExtra->dayOfTheWeek,
                            "startTime"=>$skillPayload->action->clientExtra->startTime,
                            "endTime"=>$skillPayload->action->clientExtra->endTime,
                            "startDate"=>$skillPayload->action->clientExtra->startDate,
                            "endDate"=>$skillPayload->action->clientExtra->endDate,
                        )
                    )
                )
            ));
        }        
        
        //방법2
        //카드 : 타이틀(20자), 내용(76자)
        /* $carouselTray = (Object)array(
            "carousel"=>(Object)array(
                "type"=>"basicCard",
                "items"=>array(
                )
            )
        );

        for($i=0; $i < $cnt; $i++){
            $description = "";
            // $description .= str_replace("<br>", "", $items->items[$i]->itemName) ."\n\n";
            $description .= str_replace("<br>", "", $items->items[$i]->itemSubName) ."\n";
            // $description .= "\n\n할인가 : ";
            // $description .= ((int)$items->items[$i]->originalPrice-(int)$items->items[$i]->discountedPrice);
            // $description .= "\n원가 : ".$items->items[$i]->originalPrice;


            array_push($carouselTray->carousel->items, (Object)array(
                // "title"=>str_replace("<br>", "", $items->items[$i]->itemName),     //max:20
                "title"=>"",
                "description"=>$description,    //max:76
                "thumbnail"=>(Object)array(
                    "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                ),
                "buttons"=>array(
                    (Object)array(
                        "label"=>"선택",
                        "action"=>"block",
                        "blockId"=>"5e65a49280ea0a000175dc50",
                        "extra"=>(Object)array(
                        )                        
                    )
                )
            ));
        } */

        array_push($skillResponse->template->outputs, $carouselTray);
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }


    public function cb_chooseDate(){
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);

        $skillResponse = new SkillResponse();
        $basicCard = new BasicCard();
        $description = "▶ 상품명 : ";
        $description .= $skillPayload->action->clientExtra->itemName;
        $description .= "\n▶ 가격 : ".$skillPayload->action->clientExtra->price ."원";
        $description .= "\n\n 결제는 내원 시 진행됩니다.";
        $basicCard->setContent("선택하신 상품입니다.", $description);
        $basicCard->addThumbnail("https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg", "이미지가 없을 때 나오는 텍스트", true, 100, 100, "http://naver.com");        
        array_push($skillResponse->template->outputs, array("basicCard"=>$basicCard));

        $startDate = $skillPayload->action->clientExtra->startDate;
        $endDate =  $skillPayload->action->clientExtra->endDate;
        $dayOfTheWeek = $skillPayload->action->clientExtra->dayOfTheWeek1;

        $result = $this->chooseDate($startDate, $endDate, $dayOfTheWeek);
        $skillResponse->addSimpleText("예약하실 수 있는 날짜는 다음과 같습니다.");

        //날짜 선택이 10개 이하일 때만 가능
        for($i=0; $i < count($result); $i++){
            //block 연결은 PC카톡에서 quickReplies가 노출되지 않음 
            //발화이기 때문에, 블록 연결로 action, detail 잡고, 날짜 정보는 extra로 값을 넘기는 걸로,
            $skillResponse->addQuickReplies($result[$i], "block", "5e672b5a290754000165a449");
            $skillResponse->addQuickExtra($i, "chooseDate", $result[$i]);
            $skillResponse->addQuickExtra($i, "startTime", $skillPayload->action->clientExtra->startTime);
            $skillResponse->addQuickExtra($i, "endTime", $skillPayload->action->clientExtra->endTime);

            // 차후에 저장하는 값이 무엇인지에 따라서 넘겨줄 extra 값 지정
            // "id"=>$details->middles->events[$i]->id,
            // "middleId"=>$details->middles->events[$i]->middleId,
            // "itemName"=>$details->middles->events[$i]->itemName,
            // "price"=>$details->middles->events[$i]->discountedPrice,
            // "startDate"=>$details->middles->events[$i]->startDate,
            // "endDate"=>$details->middles->events[$i]->endDate,
            // "dayOfTheWeek1"=>$details->middles->events[$i]->dayOfTheWeek1,
        }
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }

    
    public function cb_chooseTime(){
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);
        $skillResponse = new SkillResponse();

        $chooseDate = $skillPayload->action->clientExtra->chooseDate;
        $startTime = $skillPayload->action->clientExtra->startTime;
        $endTime =  $skillPayload->action->clientExtra->endTime;
        $result = $this->chooseTime($chooseDate, $startTime, $endTime);

        $basicCard = new BasicCard();
        $description = "▶ 예약날짜 : ".$chooseDate;
        $basicCard->setContent("예약가능한 시간입니다.", $description);
        $basicCard->addThumbnail("https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg", "이미지가 없을 때 나오는 텍스트", true, 100, 100, "http://naver.com");        
        array_push($skillResponse->template->outputs, array("basicCard"=>$basicCard));

        //날짜 선택이 10개 이하일 때만 가능
        for($i=0; $i < count($result); $i++){
            //block 연결은 PC카톡에서 quickReplies가 노출되지 않음 
            //발화이기 때문에, 블록 연결로 action, detail 잡고, 날짜 정보는 extra로 값을 넘기는 걸로,
            $skillResponse->addQuickReplies($result[$i], "block", "5e672e987d7e87000112a413");
            // $skillResponse->addQuickExtra($i, "key", "value");

            // 차후에 저장하는 값이 무엇인지에 따라서 넘겨줄 extra 값 지정
            // "id"=>$details->middles->events[$i]->id,
            // "middleId"=>$details->middles->events[$i]->middleId,
            // "itemName"=>$details->middles->events[$i]->itemName,
            // "price"=>$details->middles->events[$i]->discountedPrice,
            // "startDate"=>$details->middles->events[$i]->startDate,
            // "endDate"=>$details->middles->events[$i]->endDate,
            // "dayOfTheWeek1"=>$details->middles->events[$i]->dayOfTheWeek1,
        }
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }

    //봇응답 예시
    public function test(){

        //skillPayload 가져오기
        $raw_post_data = file_get_contents('php://input');
        $skillPayload = json_decode($raw_post_data);

        //고객정보 파라미터
        /*  $user_data = array(
            'custom_name'=>$skillPayload->action->params->custom_name,
            'custom_phone'=>$skillPayload->action->params->custom_phone,
            'custom_car'=>$skillPayload->action->params->custom_car,
            'custom_memo'=>$skillPayload->action->params->custom_memo,
        ); */

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
        /* $basicCard = new BasicCard();
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
        
         */

        $commerceCard = (Object)array(
            "commerceCard" => (Object)array(
                "description" => "커머스 설명입니다.",
                "price"=> "10000",
                "discount"=>"3000",
                "currency"=>"won",
                "thumbnails"=>array(
                    (Object)array(
                        "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                        "link"=>(Object)array(
                            "web"=>"http://gangnam.museclinic.co.kr/index.php/reser#"
                        )
                    )
                ),
                "profile"=>(Object)array(
                    "imageUrl"=>"https://image.shutterstock.com/image-photo/beautiful-groomed-womans-hands-cream-260nw-790646674.jpg",
                    "nickname"=>"커머스 프로필 제목"
                ),
                "buttons"=>array(
                    (Object)array(
                        "label"=>"선택",
                        "action"=>"block",
                        "blockId"=>"5e65a49280ea0a000175dc50",
                        "extra"=>(Object)array(
                            // ""=>""
                        )
                    )
                )
                )

        );

        array_push($skillResponse->template->outputs, $commerceCard);
        echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    }


/*************************************function*********************************************/

    public function curlPost($url, $data=""){
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'User-Agent: Mozilla/5.0',
        ));

        if(!($data == "" || $data == null)){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);   
        }

        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }


    public function chooseDate($startDate, $endDate, $dayOfTheWeek){
        //main 시술일 때,
        //1. 날짜는 groups[]-> startDate, endDate를 가져와서 설정
        //2. 요일은 groups[]-> dayOfTheWeek의 값을 가져와서 설정할 수 있도록 함
        //3. 시간은 groups[]-> startTime, endTime을 설정(30분 단위)    

        if($startDate == null || $startDate == ""){
            $start = strtotime("now");
            $end = strtotime("+2 week");
        }else{
            $start = strtotime($startDate);
            $end = strtotime($endDate);

            if(strtotime($startDate) < strtotime("now")){
                $start = strtotime("now");
            }
        }

        //2. 요일
        $startWeek = substr($dayOfTheWeek, 0, 1);
        $endWeek = substr($dayOfTheWeek, -1);

        //요일이 연속적일 때,
        // $result = array();
        // while ($start <= $end) {
        //     if ((date('N', $start) >= $startWeek) && (date('N', $start) <= $endWeek)) {
        //         array_push($result, date('Y-m-d', $start));
        //     }
        //     $start += 86400;
        // }


        //요일이 비연속적일 때도 사용 가능
        $result = array();
        for($i=0; $i < strlen($dayOfTheWeek); $i++){
            $starts = $start;
            $ends = $end;
            while ($starts <= $ends) {
                if ((date('N', $starts) == substr($dayOfTheWeek, $i, 1))) {
                    array_push($result, date('Y-m-d', $starts));
                }
                $starts += 86400;
            }
        }
        usort($result, function($a, $b){
            return strtotime($a) - strtotime($b);
        });

        return $result;
    }


    public function chooseTime($chooseDate="9999-99-99", $startTime="10", $endTime="20"){
        date_default_timezone_set('Asia/Seoul');
        if($chooseDate == "9999-99-99"){$chooseDate =  strtotime(date('Y-m-d'));}
        
        $chooseDate = strtotime($chooseDate);
        $currentDate = strtotime(date('Y-m-d'));

        $start = strtotime($startTime.=":00:00");
        $end = strtotime($endTime.=":00:00");

        $result = array();

        if($chooseDate > $currentDate){
            while($start <= $end){
                array_push($result, date('h:i a', $start));
                $start += 1800;
            }
        }
        else if($chooseDate == $currentDate){
            $currentTime = (string)date('h:i a', strtotime("now"));
            $hour = (int)substr($currentTime, 0, 2);
            $min = (int)substr($currentTime, 3, 2);
    
            if($min >= 30){$hour+=1; $min="00";}
            else{$min="30";}
    
            $currentTime = strtotime((string)$hour.":".$min. substr($currentTime, 6, 2));
    
            if($start < $currentTime){
                $start = $currentTime;
            }

            while($start <= $end){
                array_push($result, date('h:i a', $start));
                $start += 1800;
            }
        }

        return $result;
    }      
}   