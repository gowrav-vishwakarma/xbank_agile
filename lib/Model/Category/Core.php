<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Category_Core extends Model_Table {
    public $table = "category";
//  public $table_alias = "al_ca";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("Name")->type("string");
        $this->addField("Description")->type("text");
        

        //HAS MANY BLOCK
		$this->hasMany("Items","category_id");
        		
    }
}
