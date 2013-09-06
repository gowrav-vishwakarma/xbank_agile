&lt;?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT CORE MODEL WHICH EXTENDS THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Jos_Xaccounts_CoreCore extends Model_Table {
    public $entity_code = "jos_xaccounts";
    public $table_alias = "al_jo";
    function init(){
        parent::init();
        $this->addField("agents_id")
        ->type("int");
        $this->addField("OpeningBalanceDr")
        ->type("string");
        $this->addField("OpeningBalanceCr")
        ->type("string");
        $this->addField("ClosingBalance")
        ->type("string");
        $this->addField("CurrentBalanceDr")
        ->type("string");
        $this->addField("CurrentInterest")
        ->type("string");
        $this->addField("ActiveStatus")
        ->type("string");
        $this->addField("Nominee")
        ->type("string");
        $this->addField("NomineeAge")
        ->type("string");
        $this->addField("RelationWithNominee")
        ->type("string");
        $this->addField("MinorNomineeDOB")
        ->type("string");
        $this->addField("MinorNomineeParentName")
        ->type("string");
        $this->addField("ModeOfOperation")
        ->type("string");
        $this->addField("member_id")
        ->type("int");
        $this->addField("DefaultAC")
        ->type("string");
        $this->addField("schemes_id")
        ->type("int");
        $this->addField("AccountNumber")
        ->type("string");
        $this->addField("created_at")
        ->type("datetime");
        $this->addField("updated_at")
        ->type("datetime");
        $this->addField("branch_id")
        ->type("int");
        $this->addField("staff_id")
        ->type("int");
        $this->addField("CurrentBalanceCr")
        ->type("string");
        $this->addField("LastCurrentInterestUpdatedAt")
        ->type("datetime");
        $this->addField("InterestToAccount")
        ->type("int");
        $this->addField("RdAmount")
        ->type("string");
        $this->addField("LoanInsurranceDate")
        ->type("datetime");
        $this->addField("dealer_id")
        ->type("int");
        $this->addField("LockingStatus")
        ->type("string");
        $this->addField("LoanAgainstAccount")
        ->type("int");
        $this->addField("affectsBalanceSheet")
        ->type("string");
        $this->addField("MaturedStatus")
        ->type("string");
        $this->addField("collector_id")
        ->type("int");
        $this->addField("CollectorAccountNumber")
        ->type("string");
        $this->addField("AccountDisplayName")
        ->type("string");
        
    }
}
