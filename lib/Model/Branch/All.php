<?php

class Model_Branch_All extends XModel{
	
	function init(){
		parent::init();

		$this->addField('name','Name')->mendatory('Branch Must have a name');
		$this->addField('Address');
		$this->addField('Code');
		$this->addField('PerformClosing')->type('boolean');
		$this->addField('SendSMS')->type('boolean');
		$this->addField('published')->type('boolean');


		$this->addHook('beforeInster',$this);
	}

	function beforeInsert(){
		// CHECK IF CODE IS AUTO GENERATED , IF YES GENERATE CODE 
	}
}