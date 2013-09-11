<?php


class page_account_manage extends Page {
	function page_index(){

		$this->api->menu->generate(array('account_new'=>'New Account'),'account/manage',"Home/Accounts");

		$grid = $this->add('Grid');
		$sc=$this->add('Model_Accounts_Core');
		$sc->addExpression('SchemeType')->set(function($m,$q){
			return $m->refSQL('schemes_id')->fieldQuery('SchemeType');
		});

		$grid->setModel($sc,array('AccountNumber','CurrentBalanceDr','CurrentBalanceCr','ActiveStatus','schemes','SchemeType','member_id','member'));

		$grid->addMethod('format_Balance',function($grid,$field){
			$dr = $grid->current_row['CurrentBalanceDr'];
            $cr = $grid->current_row['CurrentBalanceCr'];
			$grid->current_row[$field]= ($cr - $dr > 0 ? $cr - $dr ." CR" : ($dr - $cr > 0 ? $dr - $cr." DR" : 0 ) );
		});
		$grid->addColumn('Balance','balance');
		$grid->addColumn('Button','edit');

		$grid->addQuickSearch(array('AccountNumber'));

		$grid->addClass('accounts_grid');
		$grid->js('reload_me')->reload();

		$grid->addPaginator(100);

		if($_GET['edit']){
			$type = $this->add('Model_Accounts_Core')->load($_GET['edit'])->ref('schemes_id')->get('SchemeType');
			$this->js()->univ()->frameURL('Edit Account ', $this->api->url('./edit',array('accounts_id'=>$_GET['edit'],'type'=>$type)))->execute();
		}

	}

	function page_edit(){
		$this->api->stickyGET('accounts_id');
		$this->api->stickyGET('type');
		$account=$this->add('Model_Accounts_'.$_GET['type'])->load($_GET['accounts_id']);
		try{
			$this->api->db->beginTransaction();
			$account->editAccountForm($this); //Just for sake of clear reading, actual work is happerning in accounts model (Just to keep all owrk in a single file related to any account type)
			$this->api->db->commit();
		}catch(Exception $e){
			$this->api->db->rollback();
			$this->js()->univ()->errorMessage($e->getMessage())->execute();
			throw $e;
		}
	}
}