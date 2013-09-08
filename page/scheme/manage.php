<?php

class page_scheme_manage extends Page {
	function page_index(){

		$this->api->menu->generate(array('scheme_new'=>'New Scheme'),true,"Home/Schemes");

		$grid = $this->add('Grid');
		$sc=$this->add('Model_Schemes_Core');
		//Name 	Interest 	Scheme Type 	Scheme Group 	Non Default Accounts 	Acc Open Comm 	Commission 	Active Status
		$grid->setModel($sc,array('Name','Interest','SchemeType','SchemeGroup','NonDefaultAccounts','AccountOpenningCommission','ActiveStatus'));

		$grid->addColumn('Button','edit');

		$grid->addClass('schemes_grid');
		$grid->js('reload_me')->reload();

		if($_GET['edit']){
			$type = $this->add('Model_Schemes_Core')->load($_GET['edit'])->get('SchemeType');
			$this->js()->univ()->frameURL('Edit Scheme ', $this->api->url('./edit',array('schemes_id'=>$_GET['edit'],'type'=>$type)))->execute();
		}

	}

	function page_edit(){
		$this->api->stickyGET('schemes_id');
		$this->api->stickyGET('type');
		$scheme=$this->add('Model_Schemes_'.$_GET['type'])->load($_GET['schemes_id']);
		try{
			$this->api->db->beginTransaction();
			$scheme->editSchemeForm($this); //Just for sake of clear reading, actual work is happerning in accounts model (Just to keep all owrk in a single file related to any account type)
			$this->api->db->commit();
		}catch(Exception $e){
			$this->api->db->rollback();
			$this->js()->univ()->errorMessage($e->getMessage())->execute();
			throw $e;
		}
	}
}