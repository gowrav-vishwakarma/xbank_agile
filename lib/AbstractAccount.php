<?php

abstract class AbstractAccount extends XModel{

	function init(){
		parent::init();
		

	}

	abstract function getCreateForm();
	abstract function getUpdateForm();

	
	abstract function deposit($amount);
	abstract function withdraw($amount);
	abstract function forclose();
	abstract function mark_matured();
}