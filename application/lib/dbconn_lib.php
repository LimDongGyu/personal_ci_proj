<?php
	function lib_db_find_by_sql(mysqli &$db_conn, $query ){
		if( !bslib_check_str( $query ) ) return NULL;
		$rowList = NULL;
		if($db_conn != NULL){
			$rowList = array();
			if( ($result = @$db_conn->query( $query ) ) ){
				$rows = $result->num_rows;
				while( $row = $result->fetch_assoc() ){
					$rowList[ count($rowList) ] = $row;
				}
				$result->free();
			}
		}
		return $rowList;
	}
	
	function redirect($location){
		$url = "http://".$_SERVER['HTTP_HOST']."/".$location."";
		$strScript = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'
					. '<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">'
					. '<head>'
					. '<meta http-equiv="Content-type" content="text/html; charset=utf-8" />'
					. '<title>MUSE MANAGER</title></head><body>'
					. '<script type="text/javascript">'
					. 'location.href=\'' . $url . '\';'
					. '</script>'
					. '</body>'
					. '</html>';			
		echo $strScript;
	}
	
	function redirectMsg($location,$msg){
		$url = "http://".$_SERVER['HTTP_HOST']."/".$location."";
		$strScript = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'
					. '<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">'
					. '<head>'
					. '<meta http-equiv="Content-type" content="text/html; charset=utf-8" />'
					. '<title>MUSE MANAGER</title></head><body>'
					. '<script type="text/javascript">'
					. 'alert("' . $msg . '");'
					. 'location.href=\'' . $url . '\';'
					. '</script>'
					. '</body>'
					. '</html>';			
		echo $strScript;
	}
	
	function redirectMsgTop($location,$msg){
		$url = "http://".$_SERVER['HTTP_HOST']."/".$location."";
		$strScript = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'
					. '<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">'
					. '<head>'
					. '<meta http-equiv="Content-type" content="text/html; charset=utf-8" />'
					. '<title>MUSE MANAGER</title></head><body>'
					. '<script type="text/javascript">'
					. 'alert("' . $msg . '");'
					. 'top.location.href=\'' . $url . '\';'
					. '</script>'
					. '</body>'
					. '</html>';			
		echo $strScript;
	}
	
	function lib_get_paginate_html($rows,$perPage,$currentPage,$strUrl,$extParamStr='', $pageType, $urlIsJs=false, $maxWidth=10){
		$pageCount = (int)($rows/$perPage);
		$pageCount = ($rows % $perPage>0 ? $pageCount+1 : $pageCount);
		
		$strHtml = '<div class="bslib_paginate">';
		
		$start = ($currentPage > $maxWidth ? ((int)(($currentPage-1)/$maxWidth))*$maxWidth+1 : 1);
		$end = $start + $maxWidth -1;
				
		if( $start > $maxWidth ){
			$prevPage = $start-1;
			if($urlIsJs==false)
				$strHtml .= lib_get_link_tag(($strUrl . '?'.($pageType=='member'?'page_m':'page').'=' . $prevPage . $extParamStr), '이전') . '&nbsp;';
			else 
				$strHtml .= lib_get_jslink_tag($strUrl,'이전',$prevPage);
		}
		
		for( $i=0; $i<$maxWidth;$i++){
			$pageNum = $i+$start;
			if( $pageNum > $pageCount) break;
			if( $pageNum == $currentPage)
				$strHtml .= '&nbsp;<span>' . $pageNum.'</span>';
			else{
				if($urlIsJs==false)
					$strHtml .= '&nbsp;' . lib_get_link_tag(($strUrl . '?'.($pageType=='member'?'page_m':'page').'=' . $pageNum . $extParamStr), $pageNum);
				else 
					$strHtml .= '&nbsp;' . lib_get_jslink_tag($strUrl,$pageNum,$pageNum);
			}
		}
		
		if( $end < $pageCount){
			$nextPage = $end+1;
			if($urlIsJs==false)
				$strHtml .= '&nbsp;' . lib_get_link_tag(($strUrl . '?'.($pageType=='member'?'page_m':'page').'=' . $nextPage . $extParamStr), '다음');
			else 
				$strHtml .= '&nbsp;' . lib_get_jslink_tag($strUrl,'다음',$nextPage);
		}
		
		$strHtml .= '</div>';
		return $strHtml;
	}
	
	function lib_get_link_tag( $strUrl, $text ){
		return '<a href="' . ($strUrl) . '">' . $text .'</a> ';
	}
	
	function lib_get_jslink_tag($methodName, $text, $params){
		return '<a href="javascript:' .  $methodName . '(' . $params . ');">' . $text .'</a> ';
	}
?>