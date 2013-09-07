<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Agentcommissionreport_Core extends Model_Table {
    public $table = "agentcommissionreport";
//  public $table_alias = "al_ag";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Agents","agents_id");
        $this->hasOne("Accounts","accounts_id");
        

		//FIELDS
        $this->addField("collector_id")->type("int");
        $this->addField("Commission")->type("string");
        $this->addField("Collection")->type("string");
        $this->addField("CommissionPayableDate")->type("datetime");
        $this->addField("CommissionPaidDate")->type("datetime");
        $this->addField("Narration")->type("string");
        

        //HAS MANY BLOCK
				
    }
}
