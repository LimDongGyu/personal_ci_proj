<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BasicCard{
    public $title;
    public $description;
    public $thumbnail;
    public $buttons;

    public function __construct(){

    }

    public function addThumbnail($imageUrl){
        $this->thumbnail=(Object)array("imageUrl"=>$imageUrl);
    }

    public function addButton($label, $action, $blockId){
        array_push($this->$buttons, (Object)array(
            "action"=>$action,
            "label"=>$label,
            "blockId"=>$blackId,
            "extra"=>""
        ));
    }
}
