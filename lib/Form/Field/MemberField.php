<?php

class Form_Field_MemberField extends autocomplete\Form_Field_Basic{
	function setModel($m, $id_field = null, $title_field = 'PersonalDetails')
    {
    	if(!is_object($m)) $m=$this->add('Model_'.$m);

    	$branch = $m->join('branch','branch_id',null,'b');
    	$branch->addField('BName','Name');
    	$branch_alias= $branch->table_alias;

    	$m->addExpression('PersonalDetails')->set('CONCAT(member.Name," [", '.$branch_alias.'.Name,"]")');

        parent::setModel($m, $id_field, $title_field);
    }
}