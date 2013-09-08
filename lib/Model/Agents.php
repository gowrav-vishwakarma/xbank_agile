<?php

class Model_Agents extends Model_Agents_Core {
    var $title_field = 'Name';
    function init(){
        parent::init();

        $m=$this->leftJoin('member','member_id');
        $m->addField('Name');

    }
}
