<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Schemes_Core extends Model_Table {
    public $table = "schemes";
//  public $table_alias = "al_sc";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch","branch_id");
        $this->hasOne("Balance_Sheet","balance_sheet_id");
        

		//FIELDS
        $this->addField("Name")->type("string");
        $this->addField("MinLimit")->type("string");
        $this->addField("MaxLimit")->type("string");
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
        $this->addField("DepriciationPercentBeforeSep")->type("string");
        $this->addField("DepriciationPercentAfterSep")->type("string");
        $this->addField("ProcessingFeesinPercent")->type("boolean");
        $this->addField("published")->type("boolean");
        $this->addField("SchemePoints")->type("string");
        $this->addField("AgentSponsorCommission")->type("string");
        $this->addField("CollectorCommissionRate")->type("string");
        $this->addField("ReducingOrFlatRate")->type("string");
        

        //HAS MANY BLOCK
		$this->hasMany("Accounts","schemes_id");
        $this->hasMany("Events","schemes_id");
        		
    }
}
