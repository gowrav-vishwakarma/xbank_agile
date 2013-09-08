<?php

class Form_Field_AccountNumber extends autocomplete\Form_Field_Basic{
	function setModel($m, $id_field = null, $title_field = null)
    {
    	if(!is_object($m)) $m=$this->add('Model_'.$m);
    	$member = $m->join('member','member_id');
		// $member->addField('Name','MemberName');

    	$m->addExpression('PersonalDetails')->set('CONCAT(accounts.AccountNumber," ",_m.Name)');

        parent::setModel($m, $id_field, $title_field);
    }
}