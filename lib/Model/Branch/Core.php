<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Branch_Core extends XModel {
    public $table = "branch";
//  public $table_alias = "al_br";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("Name")->type("string");
        $this->addField("Address")->type("text");
        $this->addField("Code")->type("string");
        $this->addField("PerformClosings")->type("string");
        $this->addField("SendSMS")->type("string");
        $this->addField("published")->type("string");
        

        //HAS MANY BLOCK
		$this->hasMany("Accounts_Core","branch_id",null,"Accounts");
        $this->hasMany("Atk_Emphistrory_Core","branch_id",null,"Atk_Emphistrory");
        $this->hasMany("Atk_Employee_Core","branch_id",null,"Atk_Employee");
        $this->hasMany("Atk_Holidays_Core","branch_id",null,"Atk_Holidays");
        $this->hasMany("Bank_Holidays_Core","branch_id",null,"Bank_Holidays");
        $this->hasMany("Closings_Core","branch_id",null,"Closings");
        $this->hasMany("Log_Core","branch_id",null,"Log");
        $this->hasMany("Member_Core","branch_id",null,"Member");
        $this->hasMany("Schemes_Core","branch_id",null,"Schemes");
        $this->hasMany("Staff_Core","branch_id",null,"Staff");
        $this->hasMany("Stock_Core","branch_id",null,"Stock");
        $this->hasMany("Stock_Consume_Core","branch_id",null,"Stock_Consume");
        $this->hasMany("Stock_Log_Core","branch_id",null,"Stock_Log");
        $this->hasMany("Stock_Purchase_Core","branch_id",null,"Stock_Purchase");
        $this->hasMany("Transactions_Core","branch_id",null,"Transactions");
        		
    }
}
