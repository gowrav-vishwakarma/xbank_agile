<?php

class Model_Accounts_SavingAndCurrent extends Model_Accounts{

	function init(){
		parent::init();
		$this->getElement('schemes_id')->destroy();
		$this->hasOne('Schemes_DDS','schemes_id')->caption('Account Under');

		$this->getElement('agents_id')->destroy();
		$this->hasOne('Agents','agents_id');

		$this->getElement('AccountDisplayName')->caption("Account Name");

		$this->getElement('RdAmount')->destroy();
		$this->addField('initial_opening_amount','RdAmount');


	}


	function newAccountForm(&$owner){

		$owner->add('H3')->set('Add New Saving And Current Account');
		$form = $owner->add('Form');
        $form->addClass('stacked atk-row');
        $form->template->trySet('fieldset','span6');
        $form->setModel('Accounts_SavingAndCurrent',array('AccountNumber','member_id','schemes_id','agents_id','ActiveStatus','ModeOfOperation','AccountDisplayName','initial_opening_amount'));
        $form->addField('line','member_id_2')->addComment('TODO LookupDB');
        $form->addField('line','member_id_3')->addComment('TODO LookupDB');
        $form->add('Order')
        		->move($form->addSeparator('span6'),'after','ModeOfOperation')
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