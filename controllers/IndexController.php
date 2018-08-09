<?php

class IndexController extends Zend_Controller_Action
{

	private $fokontanyORM ;

    public function init()
    {
        $this->fokontanyORM = new Application_Model_DbTable_Fokontany();
    }

    public function indexAction(){
        $this->_redirect('accueil/accueil');
    }

    public function getinfoAction()
    {
    	$this->_helper->layout()->disableLayout();
    	var_dump($_POST);
    }


}

