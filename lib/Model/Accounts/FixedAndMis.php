<?php

class Model_Accounts_FixedAndMis extends Model_Accounts{

	function init(){
		parent::init();
		$this->getElement('schemes_id')->destroy();
		$this->hasOne('Schemes_DDS','schemes_id');

		$this->getElement('agents_id')->destroy();
		$this->hasOne('Agents','agents_id');

		$this->getElement('RdAmount')->destroy();
		$this->addField('fd_mis_amount','RdAmount');


	}


	function newAccountForm(&$owner){

		$owner->add('H3')->set('Add New Fixed And MIS Account');
		$form = $owner->add('Form');
        $form->addClass('stacked atk-row');
        $form->template->trySet('fieldset','span6');
        $form->setModel('Accounts_FixedAndMis',array('AccountNumber','member_id','ActiveStatus','schemes_id','agents_id','ModeOfOperation','fd_mis_amount','InterestToAccount'));

        $form->addField('line','account_to_debit')->addComment('TODO Lookup');
        // $form->addField('line','intrest_to_account_no')->addComment('TODO Lookup');
        $form->add('Order')
        		->move($form->addSeparator('span6'),'after','schemes_id')
        		->move('account_to_debit','before','agents_id')
        		->now();
        // $i=1;
        // foreach ($doc=$this->add('Model_Documents')->addCondition('CCAccount',true) as $junk) {
        // 	$form->addField('checkbox','doc_selected_'.$i,$doc['Name']);
        // 	$form->addField('line','description_for'.$i,"Description For");
        // }
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