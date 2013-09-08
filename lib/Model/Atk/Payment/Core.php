<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Atk_Payment_Core extends XModel {
    public $table = "atk_payment";
//  public $table_alias = "al_at";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("emp_id")->type("int");
        $this->addField("TotalWorkingDays")->type("int");
        $this->addField("PresentDays")->type("int");
        $this->addField("HoliDays")->type("int");
        $this->addField("Sundays")->type("int");
        $this->addField("Leaves")->type("int");
        $this->addField("LeavesPaid")->type("int");
        $this->addField("Absent")->type("int");
        $this->addField("Salary")->type("string");
        $this->addField("PFAmount")->type("int");
        $this->addField("Deduction")->type("int");
        $this->addField("MonthYear")->type("string");
        $this->addField("Narration")->type("text");
        $this->addField("Created_At")->type("date");
        

        //HAS MANY BLOCK
				
    }
}
