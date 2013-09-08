<?php

class Model_Branch extends Model_Branch_Core {
    function init(){
        parent::init();
    }

    function getDefaultMember($branch=null){
    	$model= $this;
    	if($branch != null){
    		$model = $this->add('Model_Branch') ->load($branch);
    	} 
    	if(!$model->loaded()) throw $this->exception('Branch Must Be Loaded Before Getting Default Member');
    	return $model->ref('Member')->addCondition('Name',$model['Code'] . " Default")->loadAny() ;
    }
}
