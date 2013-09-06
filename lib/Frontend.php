<?php
/**
 * Consult documentation on http://agiletoolkit.org/learn 
 */
class Frontend extends ApiFrontend {
    public $menu;
    public $current_company = null;
    public $current_branch = null;
    function init(){
        parent::init();
        // Keep this if you are going to use database on all pages
        $this->dbConnect();
        $this->requires('atk','4.2.0');

        // This will add some resources from atk4-addons, which would be located
        // in atk4-addons subdirectory.
        $this->addLocation('atk4-addons',array(
                    'php'=>array(
                        'mvc',
                        'misc/lib',
                        )
                    ))
            ->setParent($this->pathfinder->base_location);

        $this->addLocation('.',array( "addons"=>'xavoc-addons' ));

        // A lot of the functionality in Agile Toolkit requires jUI
        $this->add('jUI');
        
        // Initialize any system-wide javascript libraries here
        // If you are willing to write custom JavaScript code,
        // place it into templates/js/atk4_univ_ext.js and
        // include it here
        $this->js()
            ->_load('atk4_univ_basic')
            ->_load('ui.atk4_notify')
            ;

    }

}
