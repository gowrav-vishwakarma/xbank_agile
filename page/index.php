<?php

class page_index extends Page {
	function init(){
		parent::init();

		$this->api->menu->generate(array('index'=>'Home','scheme_manage'=>'Schemes','account_manage'=>'Accounts'),null,'Home');

		$m=$this->add('Model_Member');
		$m->join('branch','branch_id')->addField('BranchName','Name');

    	$m->addExpression('PersonalDetails')->set('CONCAT(Name," ", BranchName)');

		$this->add('Grid')->addPaginator(10)->setModel($m,array('Name','BranchName'));

		// $this->add('Form')->addField('AccountNumber','ac_num')->validateNotNull()->setModel('Accounts_Core',null,'PersonalDetails');

		// $r = $this->api->db->dsql()->expr('show tables')->get();
  //       foreach ($r as $row){
  //           $table_name = $row['Tables_in_xbank'];
  //           $new_name=str_replace("jos_x", "", $table_name);
  //           if($table_name == $new_name) continue;
		// 	$q = "ALTER TABLE `$table_name` RENAME `$new_name`";
		// 	$this->api->db->dsql($this->api->db->dsql()->expr($q))->execute();
  //       }


	}
}