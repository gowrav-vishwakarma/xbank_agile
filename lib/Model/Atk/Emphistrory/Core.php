<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Atk_Emphistrory_Core extends Model_Table {
    public $table = "atk_emphistrory";
//  public $table_alias = "al_at";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch","branch_id");
        

		//FIELDS
        $this->addField("Created_At")->type("date");
        $this->addField("Post")->type("string");
        $this->addField("remarks")->type("text");
        

        //HAS MANY BLOCK
				
    }
}
