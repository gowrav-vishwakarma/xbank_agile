<?php

class MenuManager extends Menu {
	function generate($menus=array(),$cancle_page=null,$breadcrumb="welcome"){
		foreach($menus as $page=>$lable){
			$this->addMenuItem($page,$lable);
		}
		if($cancle_page){
			$this->addMenuItem($cancle_page,'Cancel');
		}


		$this->api->add('Text',null,'breadcrumb')->set($breadcrumb);
	}
}