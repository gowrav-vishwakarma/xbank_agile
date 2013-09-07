<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Premiums_Core extends Model_Table {
    public $table = "premiums";
//  public $table_alias = "al_pr";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Accounts","accounts_id");
        

		//FIELDS
        $this->addField("Amount")->type("string");
        $this->addField("Paid")->type("boolean");
        $this->addField("Skipped")->type("boolean");
        $this->addField("created_at")->type("datetime");
        $this->addField("updated_at")->type("datetime");
        $this->addField("PaidOn")->type("datetime");
        $this->addField("AgentCommissionSend")->type("boolean");
        $this->addField("AgentCommissionPercentage")->type("string");
        $this->addField("DueDate")->type("datetime");
        

        //HAS MANY BLOCK
				
    }
}
