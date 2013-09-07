<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Agents_Core extends Model_Table {
    public $table = "agents";
//  public $table_alias = "al_ag";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Member","member_id");
        

		//FIELDS
        $this->addField("ActiveStatus")->type("boolean");
        $this->addField("created_at")->type("datetime");
        $this->addField("updated_at")->type("datetime");
        $this->addField("AccountNumber")->type("string");
        $this->addField("Gaurantor1Name")->type("string");
        $this->addField("Gaurantor1FatherHusbandName")->type("string");
        $this->addField("Gaurantor1Address")->type("string");
        $this->addField("Gaurantor1Occupation")->type("string");
        $this->addField("Gaurantor2Name")->type("string");
        $this->addField("Gaurantor2FatherHusbandName")->type("string");
        $this->addField("Gaurantor2Address")->type("string");
        $this->addField("Gaurantor2Occupation")->type("string");
        $this->addField("sponsor_id")->type("int");
        $this->addField("AgentCode")->type("string");
        $this->addField("Path")->type("string");
        $this->addField("LegCount")->type("int");
        $this->addField("Rank")->type("int");
        $this->addField("Tree_id")->type("int");
        $this->addField("BusinessCreditPoints")->type("int");
        $this->addField("CumulativeBusinessCreditPoints")->type("int");
        $this->addField("Rank_1_Count")->type("int");
        $this->addField("Rank_2_Count")->type("int");
        $this->addField("Rank_3_Count")->type("int");
        $this->addField("Rank_4_Count")->type("int");
        $this->addField("Rank_5_Count")->type("int");
        $this->addField("Rank_6_Count")->type("int");
        $this->addField("Rank_7_Count")->type("int");
        $this->addField("Rank_8_Count")->type("int");
        $this->addField("Rank_9_Count")->type("int");
        $this->addField("Rank_10_Count")->type("int");
        $this->addField("Rank_11_Count")->type("int");
        $this->addField("Rank_12_Count")->type("int");
        $this->addField("Rank_13_Count")->type("int");
        $this->addField("Rank_14_Count")->type("int");
        $this->addField("Rank_15_Count")->type("int");
        $this->addField("Rank_16_Count")->type("int");
        $this->addField("Rank_17_Count")->type("int");
        $this->addField("Rank_18_Count")->type("int");
        $this->addField("Rank_19_Count")->type("int");
        $this->addField("Rank_20_Count")->type("int");
        

        //HAS MANY BLOCK
		$this->hasMany("Accounts","agents_id");
        $this->hasMany("Agentcommissionreport","agents_id");
        		
    }
}
