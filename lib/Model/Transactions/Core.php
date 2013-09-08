<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Transactions_Core extends XModel {
    public $table = "transactions";
//  public $table_alias = "al_tr";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Accounts_Core","accounts_id");
        $this->hasOne("Transaction_Type_Core","transaction_type_id");
        $this->hasOne("Staff_Core","staff_id");
        $this->hasOne("Branch_Core","branch_id");
        

		//FIELDS
        $this->addField("voucher_no")->type("string");
        $this->addField("Narration")->type("text");
        $this->addField("amountDr")->type("string");
        $this->addField("amountCr")->type("string");
        $this->addField("created_at")->type("datetime");
        $this->addField("updated_at")->type("datetime");
        $this->addField("reference_account_id")->type("int");
        $this->addField("display_voucher_no")->type("string");
        $this->addField("side")->type("string");
        $this->addField("accounts_in_side")->type("int");
        

        //HAS MANY BLOCK
				
    }
}
