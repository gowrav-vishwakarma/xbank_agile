<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Commissionslab_Core extends XModel {
    public $table = "commissionslab";
//  public $table_alias = "al_co";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        

		//FIELDS
        $this->addField("Rank")->type("int");
        $this->addField("AdvisorLevel")->type("string");
        $this->addField("TotalCreditBusinessForPromotion")->type("string");
        $this->addField("TotalAdvisors")->type("string");
        $this->addField("Level1")->type("int");
        $this->addField("Level2")->type("int");
        $this->addField("Level3")->type("int");
        $this->addField("Level4")->type("int");
        $this->addField("Level5")->type("int");
        $this->addField("Level6")->type("int");
        $this->addField("Level7")->type("int");
        $this->addField("Level8")->type("int");
        $this->addField("Level9")->type("int");
        $this->addField("Level10")->type("int");
        $this->addField("Level11")->type("int");
        $this->addField("Level12")->type("int");
        $this->addField("Level13")->type("int");
        $this->addField("Level14")->type("int");
        $this->addField("Level15")->type("int");
        $this->addField("Level16")->type("int");
        

        //HAS MANY BLOCK
				
    }
}
