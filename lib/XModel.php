<?php


class XModel extends SQL_Model{

	function validateUnique($field,$val,$model){
        //Unique Name Check
        $s=$this->add($model)
            ->addCondition($field,$val);
        if($this->loaded())
            $s->addCondition('id','<>',$this->id);
        $s->tryLoadAny();
        if($s->loaded()) $this->raiseError($field, "This Scheme Name is Already Taken, Please Choose Another One");

    }
}