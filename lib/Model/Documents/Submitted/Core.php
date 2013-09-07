<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Documents_Submitted_Core extends Model_Table {
    public $table = "documents_submitted";
//  public $table_alias = "al_do";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Accounts","accounts_id");
        $this->hasOne("Documents","documents_id");
        

		//FIELDS
        $this->addField("Description")->type("text");
        

        //HAS MANY BLOCK
				
    }
}
