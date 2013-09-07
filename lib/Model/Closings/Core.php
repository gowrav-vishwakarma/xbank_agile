<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Closings_Core extends Model_Table {
    public $table = "closings";
//  public $table_alias = "al_cl";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch","branch_id");
        

		//FIELDS
        $this->addField("daily")->type("datetime");
        $this->addField("weekly")->type("datetime");
        $this->addField("monthly")->type("datetime");
        $this->addField("halfyearly")->type("datetime");
        $this->addField("yearly")->type("datetime");
        

        //HAS MANY BLOCK
				
    }
}
