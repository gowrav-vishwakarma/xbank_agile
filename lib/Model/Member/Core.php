<?php
 /*
 * DO NOT MODIFY THIS FILE. THIS FILE WAS AUTOMATICALLY CREATED BY MODEL GENERATOR.
 * ANY CHANGES TO THIS FILE WILL BE LOST. PLEASE, EDIT NON-CORE MODEL WHICH IS EXTENDED BY THIS FILE
 * OR ADJUST DATABASE IF YOU NEED CHANGES TO THE FIELDS BELOW
 **/
class Model_Member_Core extends Model_Table {
    public $table = "member";
//  public $table_alias = "al_me";
    
    function init(){
        parent::init();
        
        //HAS ONE BLOCK
        $this->hasOne("Branch","branch_id");
        $this->hasOne("Staff","staff_id");
        

		//FIELDS
        $this->addField("Name")->type("string");
        $this->addField("CurrentAddress")->type("text");
        $this->addField("FatherName")->type("string");
        $this->addField("Cast")->type("string");
        $this->addField("PermanentAddress")->type("text");
        $this->addField("Occupation")->type("string");
        $this->addField("Age")->type("string");
        $this->addField("Nominee")->type("string");
        $this->addField("RelationWithNominee")->type("string");
        $this->addField("NomineeAge")->type("string");
        $this->addField("Witness1Name")->type("string");
        $this->addField("Witness1FatherName")->type("string");
        $this->addField("Witness1Address")->type("text");
        $this->addField("Witness2Name")->type("string");
        $this->addField("Witness2FatherName")->type("string");
        $this->addField("Witness2Address")->type("text");
        $this->addField("created_at")->type("datetime");
        $this->addField("updated_at")->type("datetime");
        $this->addField("PhoneNos")->type("text");
        $this->addField("PanNo")->type("string");
        $this->addField("IsMinor")->type("boolean");
        $this->addField("MinorDOB")->type("date");
        $this->addField("ParentName")->type("string");
        $this->addField("RelationWithParent")->type("string");
        $this->addField("ParentAddress")->type("int");
        $this->addField("netmember_id")->type("int");
        $this->addField("MemberCode")->type("string");
        $this->addField("DOB")->type("datetime");
        $this->addField("FilledForm60")->type("string");
        $this->addField("IsCustomer")->type("string");
        $this->addField("IsMember")->type("string");
        $this->addField("CustomerCode")->type("string");
        $this->addField("parent_member_id")->type("int");
        $this->addField("customer_created_at")->type("datetime");
        $this->addField("OfficeAddress")->type("string");
        $this->addField("OfficePhoneNos")->type("string");
        $this->addField("Email")->type("string");
        $this->addField("BloodGroup")->type("string");
        $this->addField("MaritalStatus")->type("string");
        $this->addField("NumberOfChildren")->type("int");
        $this->addField("MarriageDate")->type("date");
        $this->addField("HighestQualification")->type("string");
        $this->addField("OccupationDetails")->type("string");
        $this->addField("EmployerAddress")->type("string");
        $this->addField("SelfEmployeeDetails")->type("string");
        $this->addField("FamilyMonthlyIncome")->type("string");
        $this->addField("Bank")->type("string");
        $this->addField("Branch")->type("string");
        $this->addField("AccountNumber")->type("string");
        $this->addField("DebitCreditCardNo")->type("string");
        $this->addField("DebitCreditCardIssuingBank")->type("string");
        $this->addField("PassportNo")->type("string");
        $this->addField("PassportIssuedAt")->type("string");
        $this->addField("EmployerCard")->type("string");
        $this->addField("Passport")->type("string");
        $this->addField("PanCard")->type("string");
        $this->addField("VoterIdCard")->type("string");
        $this->addField("DrivingLicense")->type("string");
        $this->addField("GovtArmyIdCard")->type("string");
        $this->addField("RationCard")->type("string");
        $this->addField("OtherDocument")->type("string");
        $this->addField("DocumentDescription")->type("string");
        $this->addField("CameToKnowByNewspaper")->type("string");
        $this->addField("CameToKnowByTelevision")->type("string");
        $this->addField("CameToKnowByAdvertisement")->type("string");
        $this->addField("CameToKnowByFriends")->type("string");
        $this->addField("CameToKnowByFieldworker")->type("string");
        $this->addField("OtherDetails")->type("string");
        

        //HAS MANY BLOCK
		$this->hasMany("Accounts","member_id");
        $this->hasMany("Agents","member_id");
        $this->hasMany("Jointmembers","member_id");
        		
    }
}
