<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Staff_Core extends Model_Table {
    public $table = "staff";
//  public $table_alias = "al_st";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch","branch_id");
        

		//FIELDS
        $this->addField("StaffID")->type("string");
        $this->addField("Password")->type("string");
        $this->addField("AccessLevel")->type("int");
        $this->addField("jid")->type("int");
        

        //HAS MANY BLOCK
		$this->hasMany("Access_System","staff_id");
        $this->hasMany("Accounts","staff_id");
        $this->hasMany("Log","staff_id");
        $this->hasMany("Member","staff_id");
        $this->hasMany("Staff_Attendance","staff_id");
        $this->hasMany("Staff_Details","staff_id");
        $this->hasMany("Staff_Payments","staff_id");
        $this->hasMany("Transactions","staff_id");
        		
    }
}
