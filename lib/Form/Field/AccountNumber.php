<?php

class Form_Field_AccountNumber extends autocomplete\Form_Field_Basic{
	function setModel($m, $id_field = null, $title_field = 'PersonalDetails')
    {
    	if(!is_object($m)) $m=$this->add('Model_'.$m);
    	$member = $m->join('member','member_id',null,'_m');
    	$member_alias = $member->table_alias;

    	$m->addExpression('PersonalDetails')->set('CONCAT(accounts.AccountNumber," [",'.$member_alias.'.Name,"]")');

        parent::setModel($m, $id_field, $title_field);
    }
}