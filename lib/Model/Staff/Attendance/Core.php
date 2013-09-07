<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Staff_Attendance_Core extends Model_Table {
    public $table = "staff_attendance";
//  public $table_alias = "al_st";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Staff","staff_id");
        

		//FIELDS
        $this->addField("Date")->type("datetime");
        $this->addField("Attendance")->type("string");
        $this->addField("Narration")->type("string");
        

        //HAS MANY BLOCK
				
    }
}
