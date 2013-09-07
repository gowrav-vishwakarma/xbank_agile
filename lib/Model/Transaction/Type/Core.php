<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Transaction_Type_Core extends Model_Table {
    public $table = "transaction_type";
//  public $table_alias = "al_tr";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("Transaction")->type("string");
        $this->addField("FromAC")->type("string");
        $this->addField("ToAC")->type("string");
        $this->addField("Default_Narration")->type("string");
        

        //HAS MANY BLOCK
		$this->hasMany("Transactions","transaction_type_id");
        		
    }
}
