<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Jos_Users_Core extends XModel {
    public $table = "jos_users";
//  public $table_alias = "al_jo";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("name")->type("string");
        $this->addField("username")->type("string");
        $this->addField("email")->type("string");
        $this->addField("password")->type("string");
        $this->addField("usertype")->type("string");
        $this->addField("block")->type("string");
        $this->addField("sendEmail")->type("string");
        $this->addField("gid")->type("string");
        $this->addField("registerDate")->type("datetime");
        $this->addField("lastvisitDate")->type("datetime");
        $this->addField("activation")->type("string");
        $this->addField("params")->type("text");
        

        //HAS MANY BLOCK
				
    }
}
