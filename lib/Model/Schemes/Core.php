<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Schemes_Core extends XModel {
    public $table = "schemes";
//  public $table_alias = "al_sc";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch_Core","branch_id");
        $this->hasOne("Balance_Sheet_Core","balance_sheet_id");
        

		//FIELDS
        $this->addField("Name")->type("string");
        $this->addField("MinLimit")->type("int");
        $this->addField("MaxLimit")->type("int");
        $this->addField("Interest")->type("string");
        $this->addField("InterestMode")->type("string");
        $this->addField("InterestRateMode")->type("string");
        $this->addField("LoanType")->type("boolean");
        $this->addField("AccountOpenningCommission")->type("string");
        $this->addField("Commission")->type("string");
        $this->addField("ActiveStatus")->type("boolean");
        $this->addField("created_at")->type("datetime");
        $this->addField("updated_at")->type("datetime");
        $this->addField("ProcessingFees")->type("string");
        $this->addField("PostingMode")->type("string");
        $this->addField("PremiumMode")->type("string");
        $this->addField("CreateDefaultAccount")->type("boolean");
        $this->addField("SchemeType")->type("string");
        $this->addField("SchemeGroup")->type("string");
        $this->addField("InterestToAnotherAccount")->type("boolean");
        $this->addField("NumberOfPremiums")->type("int");
        $this->addField("MaturityPeriod")->type("int");
        $this->addField("InterestToAnotherAccountPercent")->type("string");
        $this->addField("isDepriciable")->type("string");
        $this->addField("DepriciationPercentBeforeSep")->type("int");
        $this->addField("DepriciationPercentAfterSep")->type("int");
        $this->addField("ProcessingFeesinPercent")->type("boolean");
        $this->addField("published")->type("boolean");
        $this->addField("SchemePoints")->type("string");
        $this->addField("AgentSponsorCommission")->type("string");
        $this->addField("CollectorCommissionRate")->type("string");
        $this->addField("ReducingOrFlatRate")->type("string");
        

        //HAS MANY BLOCK
		$this->hasMany("Accounts_Core","schemes_id",null,"Accounts");
        $this->hasMany("Events_Core","schemes_id",null,"Events");
        		
    }
}