<?php

class Form_Field_AccountNumber extends autocomplete\Form_Field_Basic{
	function setModel($m, $id_field = null, $title_field = null)
    {
    	if(!is_object($m)) $m=$this->add('Model_'.$m);

    	$m->addExpression('PersonalDetails')->set(function ($m,$q){
	    	$member = $m->refSQL('member_id')->fieldQuery('Name');
			
	    	return 'CONCAT(AccountNumber, " " , '.$member.')';
    	});

        parent::setModel($m, $id_field, $title_field);
    }
}