<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Atk_Leaves_Alloted_Core extends XModel {
    public $table = "atk_leaves_alloted";
//  public $table_alias = "al_at";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("emp_id")->type("int");
        $this->addField("Created_At")->type("datetime");
        $this->addField("Leaves")->type("int");
        $this->addField("Narretion")->type("text");
        

        //HAS MANY BLOCK
				
    }
}
