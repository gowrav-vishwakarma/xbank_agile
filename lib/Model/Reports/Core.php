<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Reports_Core extends Model_Table {
    public $table = "reports";
//  public $table_alias = "al_re";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("Name")->type("string");
        $this->addField("formFields")->type("text");
        $this->addField("CodeToRun")->type("text");
        $this->addField("Results")->type("text");
        $this->addField("CodeBeforeForm")->type("text");
        $this->addField("published")->type("string");
        $this->addField("ReportTitle")->type("text");
        

        //HAS MANY BLOCK
				
    }
}
