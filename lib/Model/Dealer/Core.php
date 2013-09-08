<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Dealer_Core extends XModel {
    public $table = "dealer";
//  public $table_alias = "al_de";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("DealerName")->type("string");
        $this->addField("Address")->type("string");
        

        //HAS MANY BLOCK
		$this->hasMany("Accounts_Core","dealer_id",null,"Accounts");
        		
    }
}
