<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Carousel{
        public $type;
        public $items=array();

        public function __construct(){
        }

        //@type         : (string) basicCard | commerceCard ..
        public function setType($type){
            $this->type = $type;
        }

        //@basicCard    : (Object) basicCard
        public function setBasicCard($basicCard){
            array_push($this->items, $basicCard);
        }

        //@commerceCard : (Object) commerseCard
        public function setCommerceCard($commerseCard){
            array_push($this->items, $commerseCard);
        }

        
        //@title        : (string) header title
        //@description  : (string) header description
        //@imageUrl     : (string) imageUrl of header thumbnail
        public function setCommerceCardHeader($title, $description, $imageUrl){
            $header = (Object)array(
                "title"=>$title,
                "description"=>$description,
                "thumbnail"=>(Object)array(
                    "imageUrl"=>$imageUrl
                )
            );
            $this->header = $header;
        }

        //manual
        public function using(){
            $skillResponse = new SkillResponse();
            $carousel = new Carousel();
    
            //carousel basicCard format
            $carousel->setType("basicCard");
            $basicCard = new BasicCard();
            $basicCard->setContent("title", "description");
            $basicCard->addThumbnail("https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg", "text without image", true, 100, 100, "http://naver.com");        
            $basicCard->addButton("block connect", "block", "5e608fe803ec21000146e018");
            $basicCard->addButton("link connect", "webLink", "http://naver.com");
            $basicCard->addButton("phone connect", "phone", "010-2208-5026");
            $carousel->setBasicCard($basicCard);
            
            $tray = (Object)array("carousel"=>$carousel);
            array_push($skillResponse->template->outputs, $tray);
            echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
    
    
            //carousel commerceCard format
            $carousel->setType("commerceCard");
            $carousel->setCommerceCardHeader("title", "header description", "https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg");
            $commerceCard = new CommerseCard();
            $commerceCard->title ="title";      //if no title, description letters size : 40
            $commerceCard->description = "description";
            $commerceCard->price = 10000;
            $commerceCard->discount = 3000;
            $commerceCard->currency = "won";
            $commerceCard->addThumbnail("https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg", "text without image", true, 100, 100, "http://naver.com");        
            $commerceCard->addProfile("https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722943__340.jpg", "nickname");
            $commerceCard->addButton("block connect", "block", "5e608fe803ec21000146e018");
    
            $tray = (Object)array("carousel"=>$carousel);
            array_push($tray->carousel->items, $commerceCard);
            array_push($skillResponse->template->outputs, $tray);
            echo json_encode($skillResponse, JSON_UNESCAPED_UNICODE);
        }

    }
?>