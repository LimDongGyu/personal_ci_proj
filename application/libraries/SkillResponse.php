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

    public function addQuickReplies($action, $label, $blockId=""){
        if($blockId == "" || null){
            array_push($this->template->quickReplies, (Object)array("action"=>$action, "label"=>$label));
        }else{
            array_push($this->template->quickReplies, (Object)array("action"=>$action, "label"=>$label, "blockId"=>$blockId));
        }
    }

    public function addQuickExtra($index, $key, $value){
        if($this->template->quickReplies[$index]->extra == null || ""){
            $this->template->quickReplies[$index]->extra = (Object)array($key=>$value);
        }else{
            $this->template->quickReplies[$index]->extra->$key = $value;
        }
    }
}
