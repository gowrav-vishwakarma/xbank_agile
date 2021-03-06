<?php

class Model_Schemes_Default extends Model_Schemes {

    protected $default_accounts = array(
                                // "Indirect Expenses"=>"Commission Paid On",
                                // "Indirect Expenses"=>"Interest Paid On",
                                // "Indirect Expenses"=>"Collection Charges Paid On",
                                // "Provision"=>"Commission Payable On",
                                // "Provision"=>"Interest Payable On",
                                // "Provision"=>"Collection Payable On",
                                "Provision"=>INTEREST_PROVISION_ON,
                                );

    function init(){
        parent::init();

        // FIELDS UPDATION AS PER DDS SCHEME
        $this->getElement("LoanType")->defaultValue(false);

        $this->addCondition('SchemeType','Default');
        $this->addCondition('balance_sheet_id',DEPOSITS_LIABILITIES_ID);

    }


 	function newSchemeForm(&$owner){
        $owner->add('H3')->set('Add New DDS Scheme');
		$form = $owner->add('Form');
        $form->addClass('stacked atk-row');
        $form->template->trySet('fieldset','span6');
        $form->setModel('Schemes_Default',array('Name','MinLimit','MaxLimit','Interest','balance_sheet_id','SchemePoints','SchemeGroup','ActiveStatus','AccountOpenningCommission','isDepriciable','DepriciationPercentBeforeSep','DepriciationPercentAfterSep'));

        $form->add('Order')->move($form->addSeparator('span6'),'after','SchemeGroup')->now();

        $depricable_field = $form->getElement('isDepriciable');
        $depricable_field->js(true)->univ()->bindConditionalShow(array(
                ''=>array(),
                '*'=>array('DepriciationPercentAfterSep','DepriciationPercentBeforeSep')
                ),'div .atk-row');

        $form->addSubmit('Create New Scheme');

        if($form->isSubmitted()){
            if($form['isDepriciable'] AND $form['DepriciationPercentBeforeSep']=='')
                $form->displayError('DepriciationPercentBeforeSep','This is mandatory');
            if($form['isDepriciable'] AND $form['DepriciationPercentAfterSep']=='')
                $form->displayError('DepriciationPercentAfterSep','This is mandatory');

            $form->update();
            $form->js(null,$form->js()->reload())->univ()->successMessage("New Sheme Created")->execute();
        }
    }

    function editSchemeForm(&$owner){
        if(!$this->loaded()) throw $this->exception('Scheme must be loaded before editing');
        $form=$owner->add('Form');
        $form->addClass('stacked atk-row');
        $form->template->trySet('fieldset','span6');
        $form->setModel('Schemes_Default',array('Name','MinLimit','MaxLimit','Interest','balance_sheet_id','SchemePoints','SchemeGroup','ActiveStatus','AccountOpenningCommission','isDepriciable','DepriciationPercentBeforeSep','DepriciationPercentAfterSep'));
        $form->add('Order')->move($form->addSeparator('span6'),'after','SchemeGroup')->now();

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