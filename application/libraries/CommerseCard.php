<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CommerseCard{
        public $title;
        public $description;
        public $price;
        public $discount;
        public $currency;
        public $thumbnails;
        public $profile;
        public $buttons;

        public function __construct(){

        }

        //@imageUrl     : (string)  imageUrl
        //@altText      : (string)  send message if no image, default=""
        //@link         : (Object)  array(@link_detail);
        //@linkDetail   : (string)  web | mobile | ios | android | pc | mac | wind
        //@fixedRation  : (boolean) true-> 1:1, false-> 2:1 ratio
        //@width        : (int)  if using fixedRation=1:1, ex) "100"
        //@height       : (int)  if using fixedRation=1:1, ex) "100"
        // public function addThumbnail($imageUrl, $altText="", $fixedRation=false, $width=200, $height=100, $link=""){
        public function addThumbnail($imageUrl, $link=""){
                $this->thumbnails=array(
                    (Object)array(
                "imageUrl"=>$imageUrl, 
                // "altText"=>$altText,
                // "fixedRation"=>$fixedRation,
                // "width"=>$width,
                // "height"=>$height,
            ));

            //link type : mobile | link | ios | android | pc | mac | win | web=default
            if(!($link == null || "")){
                // $this->thumbnails->link=(Object)array("web"=>$link);
                $this->thumbnails[0]->link=(Object)array("web"=>$link);
            }
        }


        //@imageUrl     : (string) imageUrl
        //@nickname     : (string) context of profile
        public function addProfile($imageUrl, $nickname){
            $this->profile=(Object)array(
                "imageUrl"=>$imageUrl,
                "nickname"=>$nickname
            );
        }


        //@label    : (string) button name
        //@action   : (string) block | webLink | phone | osLink | message | share | operator
        //@detail   : (string) action context
        public function addButton($label, $action, $detail){
            $actionType = "";
    
            switch($action){
                case 'block':
                    $actionType = "blockId";
                    break;
                case 'webLink':
                    $actionType = "webLinkUrl";
                    break;
                case 'phone':
                    $actionType = "phoneNumber";
                    break;
                case 'message':
                    $actionType = "messageText";
                    break;
                case 'osLink':
                    $actionType = "link";
                    $detail = (Object)array("web"=>$detail);
                    break;
                case 'block':
                    $actionType = "blockId";
                    break;
                    break;
                case 'share':      
                    break;
                case 'operator':   
                    break;
            }
    
            if($this->buttons == null || ""){
                $this->buttons=array(
                    (Object)array(
                        "label"=>$label,
                        "action"=>$action,
                        $actionType=>$detail,
                        "extra"=>(Object)array(),
                    )
                );
            }else{
                array_push($this->buttons, (Object)array(
                    "action"=>$action,
                    "label"=>$label,
                    $actionType=>$detail,
                    "extra"=>(Object)array(),
                ));
            }
        }
    
    
        //@index    : (int)     basicCard order
        //@key      : (string)  basicCard extra key
        //@value    : (string)  basicCard extra value
        public function addExtra($index, $key, $value){
            $this->buttons[$index]->extra->$key=$value;
        }
    }
?>