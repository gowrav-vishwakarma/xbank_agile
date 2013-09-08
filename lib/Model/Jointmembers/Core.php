<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Jointmembers_Core extends XModel {
    public $table = "jointmembers";
//  public $table_alias = "al_jo";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Accounts_Core","accounts_id");
        $this->hasOne("Member_Core","member_id");
        

		//FIELDS
        

        //HAS MANY BLOCK
				
    }
}
