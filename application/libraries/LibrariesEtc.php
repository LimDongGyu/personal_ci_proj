<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class LibrariesEtc{
        
        public $url = "";
        public $data = "";
        
        function __construct(){
            // parent::__construct();
        }

        // function curlPost($url, $data){
        //     $ch = curl_init(); 

        //     $this->$url = $url;
        //     $this->$data =$data;  

        //     curl_setopt($ch, CURLOPT_URL, $url);
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //         'User-Agent: Mozilla/5.0',
        //     ));
        //     curl_setopt($ch, CURLOPT_POST, true);
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    
        //     $output = curl_exec($ch);
        //     curl_close($ch);

        //     return $output;
        // }
    }