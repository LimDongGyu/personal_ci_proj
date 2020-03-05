<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BasicCard{
    public $title;
    public $description="";
    public $thumbnail;
    public $buttons;

    public function __construct(){
        // parent::__construct();
    }

    public function addThumbnail($imageUrl){
        $this->thumbnail=(Object)array("imageUrl"=>$imageUrl);
    }

    public function addButton($label, $action, $blockId){
        if($this->buttons == null || ""){
            $this->buttons=array(
                (Object)array(
                    "action"=>$action,
                    "label"=>$label,
                    "blockId"=>$blockId,
                )
            );
        }else{
            array_push($this->buttons, (Object)array(
                "action"=>$action,
                "label"=>$label,
                "blockId"=>$blockId,
            ));
        }
    }

    public function addExtra($index, $key, $value){
        if($this->buttons[$index]->extra == null || ""){
            $this->buttons[$index]->extra = (Object)array($key=>$value);
        }else{
            $this->buttons[$index]->extra->$key = $value;
        }
    }
}
