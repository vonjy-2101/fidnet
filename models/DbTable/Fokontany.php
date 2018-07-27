<?php

class Application_Model_DbTable_Fokontany extends Zend_Db_Table_Abstract
{

    protected $_name = 'fokontany';

    public function getAllFokontany()
    {
    	return $this->fetchAll()->toArray();
    }

    public function getFokontanyByCode($code)
    {
    	return $this->fetchAll(array(
    		'CODEFKT = ?' => $code
    	))->toArray();
    }


}

