<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Jos_Session_Core extends XModel {
    public $table = "jos_session";
//  public $table_alias = "al_jo";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("username")->type("string");
        $this->addField("time")->type("string");
        $this->addField("session_id")->type("string");
        $this->addField("guest")->type("string");
        $this->addField("userid")->type("int");
        $this->addField("usertype")->type("string");
        $this->addField("gid")->type("string");
        $this->addField("client_id")->type("string");
        $this->addField("data")->type("string");
        

        //HAS MANY BLOCK
				
    }
}
