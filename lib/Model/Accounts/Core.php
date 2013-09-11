<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Accounts_Core extends XModel {
    public $table = "accounts";
//  public $table_alias = "al_ac";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Agents","agents_id")->display(array('form'=>'autocomplete/Basic'));
        $this->hasOne("Member","member_id")->display(array('form'=>'MemberField'))->mandatory(true);
        $this->hasOne("Schemes_Core","schemes_id");
        $this->hasOne("Branch","branch_id")->defaultValue($this->api->auth->model['branch_id']);
        $this->hasOne("Staff","staff_id")->defaultValue($this->api->auth->model->id);
        $this->hasOne("Dealer","dealer_id")->display(array('form'=>'autocomplete/Basic'));
        $this->hasOne('Member','collector_id','Name','Collector')->display(array('form'=>'MemberField'));
        $this->hasOne('Accounts_SavingAndCurrent','InterestToAccount','AccountNumber');
        $this->hasOne('Accounts_SavingAndCurrent','CollectorAccountNumber','AccountNumber')->display(array('form'=>'AccountNumber'));        
        $this->hasOne('Accounts_Core',"LoanAgainstAccount")->display(array('form'=>'AccountNumber'));

        //FIELDS
        $this->addField("OpeningBalanceDr")->type("string");
        $this->addField("OpeningBalanceCr")->type("string");
        $this->addField("ClosingBalance")->type("string");
        $this->addField("CurrentBalanceDr")->type("string");
        $this->addField("CurrentInterest")->type("string");
        $this->addField("ActiveStatus")->type("boolean")->defaultValue(true);
        $this->addField("Nominee")->type("string");
        $this->addField("NomineeAge")->type("string");
        $this->addField("RelationWithNominee")->type("string");
        $this->addField("MinorNomineeDOB")->type("string");
        $this->addField("MinorNomineeParentName")->type("string");
        $this->addField("ModeOfOperation")->type("string")->enum(array('Self','Joint','AnyOne','Other'))->defaultValue('Self');
        $this->addField("DefaultAC")->type("boolean")->defaultValue(0);
        $this->addField("AccountNumber")->type("string")->mandatory(true);
        $this->addField("created_at")->type("datetime")->defaultValue($this->api->helper->getNow());
        $this->addField("updated_at")->type("datetime");
        $this->addField("CurrentBalanceCr")->type("string");
        $this->addField("LastCurrentInterestUpdatedAt")->type("datetime")->defaultValue($this->api->helper->getNow());
        $this->addField("RdAmount")->type("string");
        $this->addField("LoanInsurranceDate")->type("datetime");
        $this->addField("LockingStatus")->type("boolean");
        $this->addField("affectsBalanceSheet")->type("boolean");
        $this->addField("MaturedStatus")->type("boolean");
        $this->addField("AccountDisplayName")->type("string");
        

        //HAS MANY BLOCK
		$this->hasMany("Agentcommissionreport_Core","accounts_id",null,"Agentcommissionreport");
        $this->hasMany("Documents_Submitted_Core","accounts_id",null,"Documents_Submitted");
        $this->hasMany("Jointmembers_Core","accounts_id",null,"Jointmembers");
        $this->hasMany("Log_Core","accounts_id",null,"Log");
        $this->hasMany("Premiums_Core","accounts_id",null,"Premiums");
        $this->hasMany("Transactions_Core","accounts_id",null,"Transactions");
        		
    }
}
