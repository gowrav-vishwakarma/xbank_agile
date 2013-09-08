<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Temp_Core extends XModel {
    public $table = "temp";
//  public $table_alias = "al_te";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("AccountNumber")->type("string");
        $this->addField("LoanFromAccountPrevious")->type("string");
        $this->addField("LoanFromAccountNew")->type("string");
        $this->addField("taskdone")->type("boolean");
        

        //HAS MANY BLOCK
				
    }
}
