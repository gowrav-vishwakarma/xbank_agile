<?php

class Model_Schemes_Recurring extends Model_Schemes {

    protected $default_accounts = array(
                                "Indirect Expenses"=>"Commission Paid On",
                                "Indirect Expenses"=>"Interest Paid On",
                                "Indirect Expenses"=>"Collection Charges Paid On",
                                "Provision"=>"Commission Payable On",
                                "Provision"=>"Interest Payable On",
                                "Provision"=>"Collection Payable On",
                                "Provision"=>INTEREST_PROVISION_ON,
                                );

    function init(){
        parent::init();

        // FIELDS UPDATION AS PER DDS SCHEME
        $this->getElement("LoanType")->defaultValue(false);

        $this->addCondition('SchemeType','Recurring');
        $this->addCondition('balance_sheet_id',DEPOSITS_LIABILITIES_ID);

    }


 	function newSchemeForm(&$owner){
        $owner->add('H3')->set('Add New DDS Scheme');
		$form = $owner->add('Form');
        $form->addClass('stacked atk-row');
        $form->template->trySet('fieldset','span6');
        $form->setModel('Schemes_Recurring',array('Name','MinLimit','MaxLimit','balance_sheet_id','Interest','NumberOfPremiums','PremiumMode','MaturityPeriod','SchemePoints','SchemeGroup','ActiveStatus','AccountOpenningCommission','CollectorCommissionRate'));

        $form->add('Order')->move($form->addSeparator('span6'),'after','PremiumMode')->now();

        $form->addSubmit('Create New Scheme');
        $form->getElement('PremiumMode')->validateField(function($field) {
            if($field->get() === null or $field->get() =='')
               return "Premium Mode must be Specified";
        });

        if($form->isSubmitted()){
            $form->update();
            $form->js(null,$form->js()->reload())->univ()->successMessage("New Sheme Created")->execute();
        }
    }

    function editSchemeForm(&$owner){
        if(!$this->loaded()) throw $this->exception('Scheme must be loaded before editing');
        $form=$owner->add('Form');
        $form->addClass('stacked atk-row');
        $form->template->trySet('fieldset','span6');
        $form->setModel($this,array('Name','MinLimit','MaxLimit','Interest','NumberOfPremiums','PremiumMode','balance_sheet_id','MaturityPeriod','SchemePoints','SchemeGroup','ActiveStatus','AccountOpenningCommission','CollectorCommissionRate'));
        $form->add('Order')->move($form->addSeparator('span6'),'after','AccountOpenningCommission')->now();

        $form->addSubmit('Update This Scheme');
        
        // $form->getElement('Interest')->validateField(function($field) {
        //     return " YES IT WORKS ";
        // });

        if($form->isSubmitted()){
            $form->update();

            $actions=array(
                    $form->js()->univ()->closeDialog(),
                    $form->js()->_selector('.schemes_grid')->trigger('reload_me'),
                    $form->js()->univ()->successMessage('Scheme Updated')
                );

        	$form->js(null,$actions)->execute();
        }
    }

    function daily_closing(){}
    function weekly_closing(){}
    function foutnightly_closing(){}
    function monthly_closing(){}
    function quarterly_closing(){}
    function halfyearly_closing(){}
    function yearly_closing(){}

    // HOOKS
    function beforeSave(){}
    function beforeDelete(){}
    function beforeDeleteAll(){}
    function beforeInsert(){}
    function afterInsert(){}
    function beforeModify(){}
    function afterModify(){}

}