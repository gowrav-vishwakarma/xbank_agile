<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Staff_Payments_Core extends XModel {
    public $table = "staff_payments";
//  public $table_alias = "al_st";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Staff_Core","staff_id");
        

		//FIELDS
        $this->addField("Date")->type("datetime");
        $this->addField("Payment")->type("string");
        $this->addField("PaymentAgainst")->type("string");
        

        //HAS MANY BLOCK
				
    }
}
