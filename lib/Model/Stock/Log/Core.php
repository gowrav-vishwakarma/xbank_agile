<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Stock_Log_Core extends Model_Table {
    public $table = "stock_log";
//  public $table_alias = "al_st";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch","branch_id");
        $this->hasOne("Items","items_id");
        

		//FIELDS
        $this->addField("StockAllotedDate")->type("datetime");
        $this->addField("QuantityAlloted")->type("int");
        $this->addField("StockStatus")->type("int");
        

        //HAS MANY BLOCK
				
    }
}
