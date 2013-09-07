<?php

abstract class Model_Accounts extends Model_Accounts_Core {
    function init(){
        parent::init();
    }

    abstract function schemeCreateForm();
}
