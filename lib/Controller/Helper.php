<?php

class Controller_Helper extends AbstractController{
	
	function getNow( $format="Y-m-d H:i:s" ) {
		// TODO can be shorter
		date_default_timezone_set( 'Asia/Calcutta' );
		$timeStamp = strtotime( 'now' );
		$timeStamp=date( $format, $timeStamp );
		
		if($currDate =  $this->api->recall( 'currdate', false) === false) return $timeStamp;
		$currDate = strtotime( $currDate );
		$currDate = date( $format, $currDate );
		return $currDate;

	}

}
