&lt;?php

class page_jos_xaccounts extends Page {
    function init(){
        parent::init();
        $this->add("CRUD")->setModel("Jos_Xaccounts");
    }
}
