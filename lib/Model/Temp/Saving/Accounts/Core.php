<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Temp_Saving_Accounts_Core extends Model_Table {
    public $table = "temp_saving_accounts";
//  public $table_alias = "al_te";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("AccountNumber")->type("string");
        $this->addField("premiums_paid")->type("int");
        $this->addField("penalty")->type("string");
        $this->addField("amount_paid")->type("string");
        $this->addField("interest_amount")->type("string");
        

        //HAS MANY BLOCK
				
    }
}
