<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Staff_Core extends XModel {
    public $table = "staff";
//  public $table_alias = "al_st";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch_Core","branch_id");
        

		//FIELDS
        $this->addField("StaffID")->type("string");
        $this->addField("Password")->type("string");
        $this->addField("AccessLevel")->type("int");
        $this->addField("jid")->type("int");
        

        //HAS MANY BLOCK
		$this->hasMany("Access_System_Core","staff_id",null,"Access_System");
        $this->hasMany("Accounts_Core","staff_id",null,"Accounts");
        $this->hasMany("Log_Core","staff_id",null,"Log");
        $this->hasMany("Member_Core","staff_id",null,"Member");
        $this->hasMany("Staff_Attendance_Core","staff_id",null,"Staff_Attendance");
        $this->hasMany("Staff_Details_Core","staff_id",null,"Staff_Details");
        $this->hasMany("Staff_Payments_Core","staff_id",null,"Staff_Payments");
        $this->hasMany("Transactions_Core","staff_id",null,"Transactions");
        		
    }
}
