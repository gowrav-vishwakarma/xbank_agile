<?php

class MenuManager extends Menu {
	function generate($menus=array(),$cancleBtn=null,$breadcrumb="welcome"){
		foreach($menus as $page=>$lable){
			$this->addMenuItem($page,$lable);
		}
		if($cancleBtn){
			$this->addMenuItem($this->api->last_page?:'index','Cancle');
		}

		$this->api->add('Text',null,'breadcrumb')->set($breadcrumb);
	}
}