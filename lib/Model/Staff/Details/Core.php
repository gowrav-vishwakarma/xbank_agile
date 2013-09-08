<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Staff_Details_Core extends XModel {
    public $table = "staff_details";
//  public $table_alias = "al_st";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Staff_Core","staff_id");
        

		//FIELDS
        $this->addField("JoiningDate")->type("datetime");
        $this->addField("BasicPay")->type("string");
        $this->addField("PF")->type("string");
        $this->addField("VariablePay")->type("string");
        $this->addField("SavingAccount")->type("string");
        $this->addField("Name")->type("string");
        $this->addField("FatherName")->type("string");
        $this->addField("PresentAddress")->type("string");
        $this->addField("PermanentAddress")->type("string");
        $this->addField("MobileNo")->type("string");
        $this->addField("LandlineNo")->type("string");
        $this->addField("DOB")->type("datetime");
        $this->addField("OtherDetails")->type("string");
        

        //HAS MANY BLOCK
				
    }
}
