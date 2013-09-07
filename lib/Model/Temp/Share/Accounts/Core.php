<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Temp_Share_Accounts_Core extends Model_Table {
    public $table = "temp_share_accounts";
//  public $table_alias = "al_te";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("memberid")->type("string");
        $this->addField("Name")->type("string");
        $this->addField("amountToDeposit")->type("string");
        $this->addField("branchid")->type("string");
        $this->addField("taskdone")->type("string");
        

        //HAS MANY BLOCK
				
    }
}
