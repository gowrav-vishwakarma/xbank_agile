<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Stock_Transfer_Core extends XModel {
    public $table = "stock_transfer";
//  public $table_alias = "al_st";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("from_id")->type("int");
        $this->addField("to_id")->type("int");
        $this->addField("item_id")->type("int");
        $this->addField("Quantity")->type("string");
        $this->addField("date")->type("datetime");
        $this->addField("Remarks")->type("text");
        

        //HAS MANY BLOCK
				
    }
}
