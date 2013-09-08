<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Stock_Purchase_Core extends XModel {
    public $table = "stock_purchase";
//  public $table_alias = "al_st";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch_Core","branch_id");
        

		//FIELDS
        $this->addField("item_id")->type("int");
        $this->addField("Quantity")->type("string");
        $this->addField("Remarks")->type("text");
        $this->addField("date")->type("datetime");
        

        //HAS MANY BLOCK
				
    }
}
