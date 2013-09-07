<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Stock_Core extends Model_Table {
    public $table = "stock";
//  public $table_alias = "al_st";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch","branch_id");
        

		//FIELDS
        $this->addField("item_id")->type("int");
        $this->addField("Quantity")->type("int");
        

        //HAS MANY BLOCK
				
    }
}
