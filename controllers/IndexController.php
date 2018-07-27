<?php

class IndexController extends Zend_Controller_Action
{

	private $fokontanyORM ;

    public function init()
    {
        $this->fokontanyORM = new Application_Model_DbTable_Fokontany();
    }

    public function indexAction()
    {
        // var_dump($this->fokontanyORM->getAllFokontany());
    }

    public function getinfoAction()
    {
    	$this->_helper->layout()->disableLayout();
    	var_dump($_POST);
    }


}

