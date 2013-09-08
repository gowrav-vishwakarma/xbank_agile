<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Atk_Employee_Core extends XModel {
    public $table = "atk_employee";
//  public $table_alias = "al_at";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch_Core","branch_id");
        

		//FIELDS
        $this->addField("name")->type("string");
        $this->addField("FatherName")->type("string");
        $this->addField("PresentAddress")->type("text");
        $this->addField("PermanentAddress")->type("text");
        $this->addField("MobileNo")->type("int");
        $this->addField("LandlineNo")->type("int");
        $this->addField("DOB")->type("date");
        $this->addField("OtherDetails")->type("text");
        $this->addField("Salary")->type("int");
        $this->addField("Allownces")->type("int");
        $this->addField("PFSalary")->type("int");
        $this->addField("isPFApplicable")->type("string");
        $this->addField("PFAmount")->type("int");
        $this->addField("TDSAmount")->type("int");
        $this->addField("Account_Number")->type("int");
        $this->addField("Bank_Name")->type("string");
        $this->addField("SalaryMode")->type("int");
        $this->addField("is_Active")->type("string");
        

        //HAS MANY BLOCK
				
    }
}
