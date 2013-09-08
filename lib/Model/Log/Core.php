<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Log_Core extends XModel {
    public $table = "log";
//  public $table_alias = "al_lo";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Accounts_Core","accounts_id");
        $this->hasOne("Branch_Core","branch_id");
        $this->hasOne("Staff_Core","staff_id");
        

		//FIELDS
        $this->addField("Message")->type("text");
        $this->addField("created_at")->type("datetime");
        $this->addField("updated_at")->type("datetime");
        

        //HAS MANY BLOCK
				
    }
}
