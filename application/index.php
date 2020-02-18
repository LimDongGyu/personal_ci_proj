<?php
	session_start();
	header('Access-Control-Allow-Origin: *');  
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description'); 
	
	require_once './config/lib_env.php';

	// include $_SERVER["DOCUMENT_ROOT"]."/gyrobest/mms/common_mms.php";
	// include $_SERVER["DOCUMENT_ROOT"]."/gyrobest/mms/gyrobestcfg_mms.php";	
	
	$ar_url_cmd = explode("/", $_SERVER['REQUEST_URI']);

	$PHP_CONTROLLER_NAME=null;
	$PHP_VIEW_NAME=null;
	$DONT_RENDER=false;
	
	if( count($ar_url_cmd) > 1 && strlen($ar_url_cmd[1]) > 0){
		$PHP_CONTROLLER_NAME = $ar_url_cmd[1];
	}
	
	if( count($ar_url_cmd) > 1 && strlen($ar_url_cmd[1]) > 0){
		$PHP_VIEW_NAME = $ar_url_cmd[2];
	}
	
	$ar_url_params = explode("?", $PHP_VIEW_NAME);
	if( count($ar_url_params) > 1 && strlen($ar_url_params[1]) > 0){
		$PHP_VIEW_NAME = $ar_url_params[0];
	}
	
	$url_par = explode(".",$PHP_VIEW_NAME);
	if( count($url_par) > 1 && strlen($url_par[1]) > 0){
		$PHP_VIEW_NAME = $url_par[0];
	}
	
	if( (!isset($PHP_CONTROLLER_NAME) || strlen($PHP_CONTROLLER_NAME) < 1) && (!isset($PHP_VIEW_NAME) || strlen($PHP_VIEW_NAME) < 1) ){
		$PHP_CONTROLLER_NAME = 'Main';
		$PHP_VIEW_NAME = 'index';
	}

	
	$PHP_HEADER_NAME = 'header_default.php';
	$PHP_FOOTER_NAME = 'footer_default.php';
	
	if( isset($PHP_VIEW_NAME) ){
		include_once( './controllers/'.$PHP_CONTROLLER_NAME.'_controller.php' );
		
		if( $BSPHP_DONT_RENDER != true ){
			$viewPage = new BSPage($PHP_CONTROLLER_NAME, $PHP_VIEW_NAME,$PHP_HEADER_NAME,$PHP_FOOTER_NAME);
			$viewPage->renderPage();
		}
	}else{
		
	}	 

?>
