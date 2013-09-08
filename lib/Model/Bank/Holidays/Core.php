<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Bank_Holidays_Core extends XModel {
    public $table = "bank_holidays";
//  public $table_alias = "al_ba";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch_Core","branch_id");
        

		//FIELDS
        $this->addField("HolidayDate")->type("date");
        $this->addField("month")->type("int");
        $this->addField("year")->type("int");
        

        //HAS MANY BLOCK
				
    }
}
