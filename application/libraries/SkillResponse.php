<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SkillResponse{
    public $version;
    public $template;

    public function __construct(){
        $this->version="2.0";
        $this->template=(Object)array("outputs"=>array());
        $this->template->quickReplies=array();
    }
    

    
    //@text     : (string) context
    public function addSimpleText($text){
        array_push($this->template->outputs, array(
            "simpleText"=>(Object)array("text"=>$text)
        ));
    }


    //@imageUrl : (string)  imageUrl
    //@altText  : (string)  send message if no image, default=""
    public function addSimpleImage($imageUrl, $altText=""){
        array_push($this->template->outputs, array(
            "simpleImage"=>(Object)array(
                "imageUrl"=>$imageUrl,
                "altText"=>$altText,
            )
        ));
    }


    //@label    : (string) button name
    //@action   : (string) block | message
    //@detail   : (string) action context
    public function addQuickReplies($label, $action, $detail){
        if($action == "block"){
            array_push($this->template->quickReplies, (Object)array(
                "label"=>$label,
                "action"=>$action, 
                "blockId"=>$detail,
                "extra"=>(Object)array()
            ));
        }else if($action == "message"){
            array_push($this->template->quickReplies, (Object)array(
                "label"=>$label,
                "action"=>$action, 
                "messageText"=>$detail,
                "extra"=>(Object)array()
            ));
        }
    }


    //@index    : (int)     quickReplies order
    //@key      : (string)  quickReplies extra key
    //@value    : (string)  quickReplies extra value
    public function addQuickExtra($index, $key, $value){
        $this->template->quickReplies[$index]->extra->$key = $value;
    }



    /********************************************************************************************************************************** */

    public function addBasicCard($title, $description){
        array_push($this->template->outputs, (Object)array(
            "basicCard"=>(Object)array(
                "title"=>$title,
                "description"=>$description,
                "buttons"=>""
            )
        ));
    }
    
    public function addBasicCardButton($label, $action, $blockId){
        if($this->template->outputs[0]->basicCard->buttons == null || ""){
            $this->template->outputs[0]->basicCard->buttons=array((Object)array("label"=>$label, "action"=>$action, "blockId"=>$blockId));
        }else{
            array_push($this->template->outputs[0]->basicCard->buttons, (Object)array("label"=>$label, "action"=>$action, "blockId"=>$blockId));
        }
    }

    public function addBasicCardThumbnail($index, $imageUrl, $altText=""){
        $this->template->outputs[$index]->basicCard->thumbnail=(Object)array("imageUrl"=>$imageUrl, "altText"=>$altText);
    }
    public function addCommerceCardThumbnail($index, $imageUrl, $altText=""){
        $this->template->outputs[$index]->cummerseCard->thumbnail=(Object)array("imageUrl"=>$imageUrl, "altText"=>$altText);
    }
    public function addcarouselThumbnail($index, $imageUrl, $altText=""){
        // $this->template->outputs[$index]->carousel->itmes[$index2]->thumbnail=(Object)array("imageUrl"=>$imageUrl, "altText"=>$altText);
    }

    /***************************************************************************************** */


}
