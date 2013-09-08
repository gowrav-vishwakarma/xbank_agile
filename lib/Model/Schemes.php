<?php

abstract class Model_Schemes extends Model_Schemes_Core {

    function init(){
        parent::init();

        // Fields Modifications
        $this->getElement('branch_id')->destroy();
        $this->getElement('balance_sheet_id')->destroy();
        $this->hasOne("Branch","branch_id");
        $this->hasOne("Balance_Sheet","balance_sheet_id");

        $this->getElement('branch_id')->defaultValue($this->api->auth->model['branch_id']);

        $this->getElement("Name")->mandatory('Scheme Name must be provided');
        $this->getElement('MinLimit')->type('int')->caption('Minimum Balance/ Ammount')->defaultValue(0);
        $this->getElement('MaxLimit')->type('int')->caption('Maximum Balance/ Ammount')->defaultValue(-1)->hint('Use -1 to disable limit');
        $this->getElement('Interest')->type('int')->caption('Interest In Percentage')->defaultValue('0');
        
        $this->getElement("InterestMode")->type("string")->defaultValue(null);
        $this->getElement("InterestRateMode")->type("string")->defaultValue('0');
        // $this->getElement("LoanType")->type("boolean");
        $this->getElement('AccountOpenningCommission')->caption('Account Commission in %')->hint('Opening Commission, First Premium, Second Premium, ...')->defaultValue('0');
        $this->getElement("Commission")->type("string")->defaultValue(null);
        $this->getElement("ActiveStatus")->defaultValue(true);
        $this->getElement("created_at")->defaultValue($this->api->helper->getNow('Y-m-d H:i:s'));
        // $this->getElement("updated_at")->type("datetime");
        $this->getElement("ProcessingFees")->type("string")->defaultValue(null);
        $this->getElement("PostingMode")->type("string")->defaultValue('');
        $this->getElement("PremiumMode")
            ->setValueList(array_flip(array('Not Applicable' => '-1', 'Yearly' => 'Y', 'Half Yearly' => 'HF', 'Quarterly' => 'Q', 'Monthly' => 'M', 'Weekly' => 'W', 'Daily' => 'D')))
            ->defaultValue(null);
        $this->getElement("CreateDefaultAccount")->type("boolean")->defaultValue(0);
        // $this->getElement("SchemeType")->type("string");
        // $this->getElement("SchemeGroup")->type("string");
        // $this->getElement("InterestToAnotherAccount")->type("boolean");
        // $this->getElement("NumberOfPremiums")->type("int");
        $this->getElement('MaturityPeriod')->caption('Period of Maturity for FD, MIS, RD, DDS(in months)');
        // $this->getElement("InterestToAnotherAccountPercent")->type("string");
        $this->getElement("isDepriciable")->type("boolean");
        // $this->getElement("DepriciationPercentBeforeSep")->type("string");
        // $this->getElement("DepriciationPercentAfterSep")->type("string");
        // $this->getElement("ProcessingFeesinPercent")->type("boolean");
        // $this->getElement("published")->type("boolean");
        // $this->getElement("SchemePoints")->type("string");
        // $this->getElement("AgentSponsorCommission")->type("string");
        // $this->getElement("CollectorCommissionRate")->type("string");
        // $this->getElement("ReducingOrFlatRate")->type("string");
        
        $this->getElement('SchemeType')->display(array('form'=>'dropdown'))->enum(explode(',',ACCOUNT_TYPES))->defaultValue(null)->mandatory('SchemeType Is Must');

        
        $this->add("Controller_Validator");

        $this->addRule("Name", "Unique", array('Model_Schemes_Core')); //Defined in XModel

        $this->addHook('beforeSave',array($this,'defaultBeforeSave'));
        $this->addHook('beforeSave',$this);

        $this->addHook('beforeDelete',array($this,'defaultBeforeDelete'));
        $this->addHook('beforeDelete',$this);
        
        $this->addHook('beforeDeleteAll',array($this,'defaultBeforeDeleteAll'));
        $this->addHook('beforeDeleteAll',$this);
        
        $this->addHook('beforeInsert',array($this,'defaultBeforeInsert'));
        $this->addHook('beforeInsert',$this);
        
        $this->addHook('afterInsert',array($this,'defaultAfterInsert'));
        $this->addHook('afterInsert',$this);
        
        $this->addHook('beforeModify',array($this,'defaultBeforeModify'));
        $this->addHook('beforeModify',$this);
        
        $this->addHook('afterModify',array($this,'defaultAfterModify'));
        $this->addHook('afterModify',$this);
    }


    abstract function newSchemeForm(&$owner);
    abstract function editSchemeForm(&$owner);

    abstract function daily_closing();
    abstract function weekly_closing();
    abstract function foutnightly_closing();
    abstract function monthly_closing();
    abstract function quarterly_closing();
    abstract function halfyearly_closing();
    abstract function yearly_closing();


    final function defaultBeforeSave(){
        if(!$this['SchemeGroup']) $this['SchemeGroup'] = $this['SchemeType'];
        $this['updated_at'] = $this->api->helper->getNow();
    }

    final function defaultBeforeDelete(){
        // TODO CHECK IF TRANSACTIONS EXISTS OR NOT
    }

    final function defaultBeforeDeleteAll(){

    }

    final function defaultBeforeInsert(){
        
    }

    final function defaultAfterInsert($model,$new_schemed_id){
        // Add Default Accounts For HO 
        $branch = $this->add('Model_Branch');
        foreach ($branch as $junk) {
            $ac = $branch->ref('Accounts');
            $ac['schemes_id'] = $new_schemed_id;
            $ac['AccountNumber'] = $branch['Code'] . SP . $this['Name'];
            $ac['member_id'] = $branch->getDefaultMember()->id;
            $ac['InterestToAccount'] = 0;
            $ac['DefaultAC'] = 1;
            $ac['staff_id'] = $this->api->auth->model->id;
            $ac->save();
        }

        // Add Other Default Accounts for this Scheme for all other branches
        foreach($this->default_accounts as $d_scheme => $d_account){
            $scheme = $this->add('Model_Schemes_Core');
            $scheme->loadBy('Name',$d_scheme);
            
            $branch = $this->add('Model_Branch');
            foreach ($branch as $junk) {
                $account['schemes_id'] = $scheme->id;
                $account['branch_id'] = $branch->id;
                $ac['AccountNumber'] = $branch['Code'] . SP . $d_account . SP . $this['Name'];
                $ac['InterestToAccount'] = 0;
                $ac['member_id'] = $branch->getDefaultMember()->id;
                $ac['DefaultAC'] = 1;
                $ac['staff_id'] = $this->api->auth->model->id;
                $ac->save();
            }
        }
    }

    final function defaultBeforeModify(){
        if($this->dirty['Interest']){
            if($account_count=$this->ref('Accounts')->count()->getOne() > 0)
                throw $this->raiseError('Interest',"$account_count accounts found, cannot change Interest Now");
        }
        if($this->dirty['AccountOpenningCommission']){
            if($account_count=$this->ref('Accounts')->count()->getOne() > 0)
                throw $this->raiseError('AccountOpenningCommission',"$account_count accounts found, cannot change Commission Now");
        }
        if($this->dirty['MaturityPeriod']){
            if($account_count=$this->ref('Accounts')->count()->getOne() > 0)
                throw $this->raiseError('MaturityPeriod',"$account_count accounts found, cannot change Maturity Period Now");
        }
        if($this->dirty['NumberOfPremiums']){
            if($account_count=$this->ref('Accounts')->count()->getOne() > 0)
                throw $this->raiseError('NumberOfPremiums',"$account_count accounts found, cannot change Number Of Premiums Now");
        }
    }

    final function defaultAfterModify(){

    }

}
