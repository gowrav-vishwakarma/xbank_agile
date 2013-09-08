<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Balance_Sheet_Core extends XModel {
    public $table = "balance_sheet";
//  public $table_alias = "al_ba";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("Head")->type("string");
        $this->addField("positive_side")->type("string");
        $this->addField("is_pandl")->type("string");
        $this->addField("show_sub")->type("string");
        $this->addField("subtract_from")->type("string");
        $this->addField("order")->type("string");
        

        //HAS MANY BLOCK
		$this->hasMany("Schemes_Core","balance_sheet_id",null,"Schemes");
        		
    }
}
