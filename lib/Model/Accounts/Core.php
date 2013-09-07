<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Accounts_Core extends Model_Table {
    public $table = "accounts";
//  public $table_alias = "al_ac";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Agents","agents_id");
        $this->hasOne("Member","member_id");
        $this->hasOne("Schemes","schemes_id");
        $this->hasOne("Branch","branch_id");
        $this->hasOne("Staff","staff_id");
        $this->hasOne("Dealer","dealer_id");
        

		//FIELDS
        $this->addField("OpeningBalanceDr")->type("string");
        $this->addField("OpeningBalanceCr")->type("string");
        $this->addField("ClosingBalance")->type("string");
        $this->addField("CurrentBalanceDr")->type("string");
        $this->addField("CurrentInterest")->type("string");
        $this->addField("ActiveStatus")->type("boolean");
        $this->addField("Nominee")->type("string");
        $this->addField("NomineeAge")->type("string");
        $this->addField("RelationWithNominee")->type("string");
        $this->addField("MinorNomineeDOB")->type("string");
        $this->addField("MinorNomineeParentName")->type("string");
        $this->addField("ModeOfOperation")->type("string");
        $this->addField("DefaultAC")->type("boolean");
        $this->addField("AccountNumber")->type("string");
        $this->addField("created_at")->type("datetime");
        $this->addField("updated_at")->type("datetime");
        $this->addField("CurrentBalanceCr")->type("string");
        $this->addField("LastCurrentInterestUpdatedAt")->type("datetime");
        $this->addField("InterestToAccount")->type("int");
        $this->addField("RdAmount")->type("string");
        $this->addField("LoanInsurranceDate")->type("datetime");
        $this->addField("LockingStatus")->type("boolean");
        $this->addField("LoanAgainstAccount")->type("int");
        $this->addField("affectsBalanceSheet")->type("boolean");
        $this->addField("MaturedStatus")->type("boolean");
        $this->addField("collector_id")->type("int");
        $this->addField("CollectorAccountNumber")->type("string");
        $this->addField("AccountDisplayName")->type("string");
        

        //HAS MANY BLOCK
		$this->hasMany("Agentcommissionreport","accounts_id");
        $this->hasMany("Documents_Submitted","accounts_id");
        $this->hasMany("Jointmembers","accounts_id");
        $this->hasMany("Log","accounts_id");
        $this->hasMany("Premiums","accounts_id");
        $this->hasMany("Transactions","accounts_id");
        		
    }
}
