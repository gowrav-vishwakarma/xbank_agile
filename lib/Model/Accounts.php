<?php

abstract class Model_Accounts extends Model_Accounts_Core {

    function init(){
        parent::init();

        $this->add("Controller_Validator");
        $this->addRule("AccountNumber", "Unique", array('Model_Accounts_Core'));

        $this->addHook('beforeSave',array($this,'defaultBeforeSave'));
        $this->addHook('beforeSave',$this);

        $this->addHook('beforeDelete',array($this,'defaultBeforeDelete'));
        $this->addHook('beforeDelete',$this);
        
        $this->addHook('beforeDeleteAll',array($this,'defaultBeforeDeleteAll'));
        $this->addHook('beforeDeleteAll',$this);
        
        $this->addHook('beforeInsert',array($this,'defaultBeforeInsert'));
        $this->addHook('beforeInsert',$this);
        
        $this->addHook('afterInsert',array($this,'defaultAfterInsert'));
        $this->addHook('afterInsert',$this);
        
        $this->addHook('beforeModify',array($this,'defaultBeforeModify'));
        $this->addHook('beforeModify',$this);
        
        $this->addHook('afterModify',array($this,'defaultAfterModify'));
        $this->addHook('afterModify',$this);
    }

    abstract function newAccountForm(&$owner);
    abstract function editAccountForm(&$owner);
    abstract function deposit($amount);
    abstract function withdraw($amount);
    abstract function forclose();
    abstract function mature();

    final function defaultBeforeSave(){
    }

    final function defaultBeforeDelete(){
        // TODO CHECK IF TRANSACTIONS EXISTS OR NOT
    }

    final function defaultBeforeDeleteAll(){

    }

    final function defaultBeforeInsert(){
        
    }

    final function defaultAfterInsert(){

    }

    final function defaultBeforeModify(){
    }

    final function defaultAfterModify(){

    }

    function getCommission($type){
        
    }

}
