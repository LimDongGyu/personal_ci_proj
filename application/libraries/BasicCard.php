<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BasicCard{
    public $title;
    public $description;
    public $thumbnail;
    public $buttons;

    public function __construct(){
        // parent::__construct();
    }


    //@title        : (string) basicCard title
    //@description  : (string) basicCard description
    public function setContent($title, $description){
        $this->title = $title;
        $this->description = $description;
    }


    //@imageUrl     : (string)  imageUrl
    //@altText      : (string)  send message if no image, default=""
    //@link         : (Object)  array(@link_detail);
    //@linkDetail   : (string)  web | mobile | ios | android | pc | mac | wind
    //@fixedRation  : (boolean) true-> 1:1, false-> 2:1 ratio
    //@width        : (int)  if using fixedRation=1:1, ex) "100"
    //@height       : (int)  if using fixedRation=1:1, ex) "100"
    public function addThumbnail($imageUrl, $altText="", $fixedRation=false, $width=200, $height=100, $link=""){
        $this->thumbnail=(Object)array(
            "imageUrl"=>$imageUrl, 
            "altText"=>$altText,
            "fixedRation"=>$fixedRation,
            "width"=>$width,
            "height"=>$height,
        );


        //link type : mobile | link | ios | android | pc | mac | win | web=default
        if(!($link == null || "")){
            $this->thumbnail->link=(Object)array("web"=>$link);
        }
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