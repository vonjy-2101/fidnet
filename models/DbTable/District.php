<?php

class Application_Model_DbTable_District extends Zend_Db_Table_Abstract
{

    protected $_name = 'district';

    public function getAllDistrict()
    {
    	return $this->fetchAll()->toArray();
    }

    public function getDistrictByCode($code)
    {
    	return $this->fetchAll(array(
    		'CODEDIST = ?' => $code
    	))->toArray();
    } 

    public function getDistrictByRegion($region)
    {
        return $this->fetchAll(array(
            'CODEREG = ?' => $region
        ))->toArray();
    } 
}

