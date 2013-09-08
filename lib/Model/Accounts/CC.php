<?php

class Model_Accounts_CC extends Model_Accounts{

	function init(){
		parent::init();
		$this->getElement('schemes_id')->destroy();
		$this->hasOne('Schemes_DDS','schemes_id')->caption('Accout Under');


		// $this->getElement('Nominee')->destroy();
		// $this->addField('guarenter','Nominee');
		
		// $this->getElement('NomineeAge')->destroy();
		// $this->addField('guarenter_age','NomineeAge');

		// $this->getElement('RelationWithNominee')->destroy();
		// $this->addField('guarenter_ph_no','RelationWithNominee');
		
		$this->getElement('RdAmount')->destroy();
		$this->addField('cc_limit','RdAmount');

		$account_scheme = $this->join('schemes','schemes_id');
		$account_scheme->addField('SchemeType');
		$this->addCondition('SchemeType','CC');


	}


	function newAccountForm(&$owner){

		$owner->add('H3')->set('Add New CC Account');
		$form = $owner->add('Form');
        $form->addClass('stacked atk-row');
        $form->template->trySet('fieldset','span6');
        $form->setModel('Accounts_CC',array('AccountNumber','member_id','schemes_id','agents_id','ActiveStatus','AccountDisplayName'));
        

        $form->add('Order')->move($form->addSeparator('span6'),'after','AccountDisplayName')->now();
        $i=1;
        foreach ($doc=$this->add('Model_Documents')->addCondition('CCAccount',true) as $junk) {
        	$form->addField('checkbox','doc_selected_'.$i,$doc['Name']);
        	$form->addField('line','description_for'.$i,"Description For");
        }
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