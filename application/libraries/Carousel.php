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

    }
?>