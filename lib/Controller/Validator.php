<?php

/*
 add rule in your model $this->addRule("Interest", "Len", array(5, 10));

 and model must have function names ValidateLen($field,$value,$min,$max)

*/

class Controller_Validator extends AbstractController {
    private $rules = array();
    function init(){
        parent::init();
        $this->owner->addHook("beforeSave", array($this, "validate"));
        $this->owner->addMethod("addRule", array($this, "addRule"));
        $this->owner->addMethod("raiseError", array($this, "raiseError"));
    }
    function addRule($obj, $field, $method, $params){
        $this->rules[$field][] = array($method, $params);
    }
    function validate($ptr){
        foreach ($this->rules as $field => $rules){
            foreach ($rules as $rule){
                list($method, $params) = $rule;
                $method = "validate" . $method;
                if (method_exists($this->owner, $method)){
                    $ptr = $this->owner; 
                } else if (method_exists($this, $method)){
                    $ptr = $this;
                } else {
                    throw $this->exception("Method $method not defined", "ValidityCheck");
                }
                call_user_func_array(
                    array($ptr, $method),
                    array_merge(array($field, $ptr->get($field)), $params)
                );
            }
        }
        /* magic */
    }
    function raiseError($obj, $field, $error){
        throw $this->exception($error, "ValidityCheck")->setField($field);
    }

    
}