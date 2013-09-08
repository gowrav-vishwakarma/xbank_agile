<?php

class Form_Field_AccountNumber extends autocomplete\Form_Field_Basic{
	function setModel($m, $id_field = null, $title_field = null)
    {
    	if(!is_object($m)) $m=$this->add('Model_'.$m);

    	$m->addExpression('PersonalDetails')->set(function ($m,$q){
	    	$member = $m->leftJoin('member','member_id');
	    	$member->addField('MName','Name');
			
	    	return 'CONCAT(AccountNumber, " " , '.$q->getField('MName').')';
    	});

        parent::setModel($m, $id_field, $title_field);
    }
}