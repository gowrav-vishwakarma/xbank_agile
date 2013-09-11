<?php

class page_account_new extends Page {
	function init(){
		parent::init();

		$this->api->menu->generate(array(),'index',"Home/Account/New");

		$tabs= $this->add('Tabs');
		$account_types = explode(',',ACCOUNT_TYPES);
		foreach($account_types as $ac_type){
			$obj=$this->add('Model_Accounts_'.$ac_type);
			$tab=$tabs->addTab($ac_type);
			try{
				$this->api->db->beginTransaction();
				$obj->newAccountForm($tab,$ac_type);
				$this->api->db->commit();
			}catch(Exception $e){
				$this->api->db->rollback();
				throw $e;
				$this->js()->univ()->errorMessage($e->getMessage())->execute();
			}
		}


	}
}