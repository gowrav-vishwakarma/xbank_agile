<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Cideveloper_Projects_Core extends Model_Table {
    public $table = "cideveloper_projects";
//  public $table_alias = "al_ci";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("component")->type("string");
        $this->addField("com_name")->type("string");
        $this->addField("extension_type")->type("string");
        $this->addField("params")->type("text");
        $this->addField("published")->type("string");
        $this->addField("manifest")->type("text");
        

        //HAS MANY BLOCK
				
    }
}
