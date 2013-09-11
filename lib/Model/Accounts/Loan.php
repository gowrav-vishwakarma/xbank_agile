<?php

class Model_Accounts_Loan extends Model_Accounts{

	function init(){
		parent::init();

		$this->getElement('schemes_id')->destroy();
		$this->hasOne('Schemes_DDS','schemes_id')->caption('Account Scheme')->mandatory(true);

		$this->getElement('Nominee')->destroy();
		$this->addField('guarenter','Nominee');
		
		$this->getElement('NomineeAge')->destroy();
		$this->addField('guarenter_age','NomineeAge');

		$this->getElement('RelationWithNominee')->destroy();
		$this->addField('guarenter_ph_no','RelationWithNominee');
		
		$this->getElement('RdAmount')->destroy();
		$this->addField('loan_amount','RdAmount')->mandatory(true);

        $account_scheme = $this->leftJoin('schemes','schemes_id');
        $account_scheme->addField('SchemeType');
        $this->addCondition('SchemeType','Loan');


	}


	function newAccountForm(&$owner){

		$owner->add('H3')->set('Add New DDS Scheme');
		$form = $owner->add('Form');
        $form->addClass('stacked atk-row');
        $form->template->trySet('fieldset','span6');
        $form->setModel('Accounts_Loan',array('AccountNumber','member_id','schemes_id','agents_id','ActiveStatus','ModeOfOperation','LoanInsurranceDate','dealer_id','loan_amount','guarenter','guarenter_ph_no','guarenter_age','LoanAgainstAccount'));
        
        $is_loan_ag_secr_field=$form->addField('checkbox','is_loan_against_security');
        $form->addField('line','loan_amount_from_account');

        $form->add('Order')
            ->move($form->addSeparator('span6'),'after','guarenter_age')
            // ->move('LoanAgainstAccount','after','loan_against_security')
            ->now();
        
        $is_loan_ag_secr_field->js(true)->univ()->bindConditionalShow(array(
            ''=>array(),
            '*'=>array('LoanAgainstAccount')
            ),'div .atk-row');
        
        $i=1;
        foreach ($doc=$this->add('Model_Documents') as $junk) {
        	$chk=$form->addField('checkbox','doc_selected_'.$i,$doc['Name']);
        	$dsc=$form->addField('line','description_for'.$i,$doc['Name']);
            $chk->js(true)->univ()->bindConditionalShow(array(
                ''=>array(),
                '*'=>array($dsc)
                ),'div .atk-row');
        }
        $form->addSubmit('Create New Account');

        if($form->isSubmitted()){
            $new_account = $form->model;
            if($form->get('is_loan_against_security')){
            	$security_account = $this->add('Model_Accounts_Core')->load($form->get('SecurityAccount'));
            	$security_account['LockingStatus']=true;
            	$security_account->save();
            	$new_account['LoanAgainstAccount']= $security_account->id;
            }
            
            $form->update();
            // TODO Transactions Entry
            // TODO Account Opening Commission Settlement

            $form->js(null,$form->js()->reload())->univ()->successMessage("New Account Created")->execute();
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