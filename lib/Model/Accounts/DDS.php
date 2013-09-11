<?php

class Model_Accounts_DDS extends Model_Accounts{

	function init(){
		parent::init();
		$this->getElement('schemes_id')->destroy();
		$this->hasOne('Schemes_DDS','schemes_id')->caption('Account Scheme')->mandatory(true);

		$this->getElement('AccountDisplayName')->caption("Account Name");

		$this->getElement('RdAmount')->destroy();
		$this->addField('dds_amount','RdAmount')->mandatory(true);

		$account_scheme = $this->leftJoin('schemes','schemes_id');
		$account_scheme->addField('SchemeType');
		$this->addCondition('SchemeType','DDS');


	}


	function newAccountForm(&$owner){

		$owner->add('H3')->set('Add New DDS Account');
		$form = $owner->add('Form');
        $form->addClass('stacked atk-row');
        $form->template->trySet('fieldset','span6');
        $form->setModel('Accounts_DDS',array('AccountNumber','member_id','schemes_id','agents_id','ActiveStatus','ModeOfOperation','AccountDisplayName','dds_amount'));
        $form->add('Order')
        		->move($form->addSeparator('span6'),'after','agents_id')
        		->now();
        
        $form->addSubmit('Create New Account');

        if($form->isSubmitted()){
            // $form->update();

            // $form->js(null,$form->js()->reload())->univ()->successMessage("New Account Created")->execute();
        }


	}
    function editAccountForm(&$owner){}

	function beforeSave(){}
	function beforeDelete(){}
	function beforeDeleteAll(){}
	function beforeInsert(){}
	function afterInsert(){}
	function beforeModify(){}
	function afterModify(){}
	
	function deposit($amount){}
    function withdraw($amount){}
    function forclose(){}
    function mature(){}

    
}