<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Branch_Core extends Model_Table {
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
		$this->hasMany("Accounts","branch_id");
        $this->hasMany("Atk_Emphistrory","branch_id");
        $this->hasMany("Atk_Employee","branch_id");
        $this->hasMany("Atk_Holidays","branch_id");
        $this->hasMany("Bank_Holidays","branch_id");
        $this->hasMany("Closings","branch_id");
        $this->hasMany("Log","branch_id");
        $this->hasMany("Member","branch_id");
        $this->hasMany("Schemes","branch_id");
        $this->hasMany("Staff","branch_id");
        $this->hasMany("Stock","branch_id");
        $this->hasMany("Stock_Consume","branch_id");
        $this->hasMany("Stock_Log","branch_id");
        $this->hasMany("Stock_Purchase","branch_id");
        $this->hasMany("Transactions","branch_id");
        		
    }
}
