<?php

class Application_Model_DbTable_Commune extends Zend_Db_Table_Abstract
{

    protected $_name = 'commune';

    public function getAllCommune()
    {
    	return $this->fetchAll()->toArray();
    }

    public function getCommuneByCode($code)
    {
    	return $this->fetchAll(array(
    		'CODECOMM = ?' => $code
    	))->toArray();
    } 

    public function getCommuneByDistrict($district)
    {
        return $this->fetchAll(array(
            'CODEDIST = ?' => $district
        ))->toArray();
    }

}

