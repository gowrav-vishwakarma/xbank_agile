<?php

class page_index extends Page {
	function init(){
		parent::init();

		$this->api->menu->generate(array('index'=>'Home','scheme_manage'=>'Schemes'),null,'Home');

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