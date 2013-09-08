<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Items_Core extends XModel {
    public $table = "items";
//  public $table_alias = "al_it";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Category_Core","category_id");
        

		//FIELDS
        $this->addField("Name")->type("string");
        $this->addField("Price")->type("string");
        $this->addField("Description")->type("text");
        

        //HAS MANY BLOCK
		$this->hasMany("Stock_Log_Core","items_id",null,"Stock_Log");
        		
    }
}
