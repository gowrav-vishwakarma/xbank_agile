<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Documents_Core extends XModel {
    public $table = "documents";
//  public $table_alias = "al_do";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("Name")->type("string");
        $this->addField("SavingAccount")->type("boolean");
        $this->addField("FixedMISAccount")->type("boolean");
        $this->addField("LoanAccount")->type("boolean");
        $this->addField("RDandDDSAccount")->type("boolean");
        $this->addField("CCAccount")->type("boolean");
        $this->addField("OtherAccounts")->type("boolean");
        

        //HAS MANY BLOCK
		$this->hasMany("Documents_Submitted_Core","documents_id",null,"Documents_Submitted");
        		
    }
}
