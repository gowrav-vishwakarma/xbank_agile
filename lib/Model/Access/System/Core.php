<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Access_System_Core extends Model_Table {
    public $table = "access_system";
//  public $table_alias = "al_ac";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Staff","staff_id");
        

		//FIELDS
        

        //HAS MANY BLOCK
				
    }
}
