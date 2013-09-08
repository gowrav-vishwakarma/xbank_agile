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


	function getComission($CommissionString, $whatToGet,$PremiumNumber=-1){
            $CommissionString=trim($CommissionString," ");
            $CommissionString=trim($CommissionString,",");
            $commArray=explode(",",$CommissionString);
            $result=array();
            $result["isPercentage"]=false;
            if(strpos("%", $commArray[0]) !== false ){
                $result["isPercentage"]=true;
//                $commArray[0]=str_replace("%", "");
            }
            switch($whatToGet){
                case OPENNING_COMMISSION:
                    $result["Commission"]=trim($commArray[0]);

                    break;
                case PREMIUM_COMMISSION:
                    if(count($commArray)  <= 1){
                        throw new Exception("Premium must start from second Commission");
                    }

                    if($PremiumNumber >= count($commArray)){
                        $commArray[$PremiumNumber]=$commArray[count($commArray)-1];
                    }

                    if(strpos("%", $commArray[$PremiumNumber]) !== false ){
                        $result["isPercentage"]=true;
//                        $commArray[$PremiumNumber]=str_replace("%", "");
                    }

                    $result["Commission"]=trim($commArray[$PremiumNumber]);
                    $result["isPercentage"]=true;
                    break;
            }

            return $result["Commission"];
        }


}
