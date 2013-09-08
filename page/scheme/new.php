<?php

class page_scheme_new extends Page {
	function init(){
		parent::init();

		$this->api->menu->generate(array(),true,"Home/Schemes/New");

		$tabs= $this->add('Tabs');
		$account_types = explode(',',ACCOUNT_TYPES);
		foreach($account_types as $ac_type){
			$obj=$this->add('Model_Schemes_'.$ac_type);
			$tab=$tabs->addTab($ac_type);
			$obj->newSchemeForm($tab,$ac_type);
		}


	}
}