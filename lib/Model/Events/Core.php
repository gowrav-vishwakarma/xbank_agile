<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Events_Core extends XModel {
    public $table = "events";
//  public $table_alias = "al_ev";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Schemes_Core","schemes_id");
        

		//FIELDS
        $this->addField("Event")->type("string");
        $this->addField("CodeSQL")->type("text");
        $this->addField("Sno")->type("string");
        $this->addField("Description")->type("text");
        $this->addField("ActiveStatus")->type("boolean");
        

        //HAS MANY BLOCK
				
    }
}
