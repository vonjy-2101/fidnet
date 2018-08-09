<?php

class Application_Model_DbTable_Region extends Zend_Db_Table_Abstract
{

    protected $_name = 'region';

    public function getAllRegion()
    {
    	return $this->fetchAll()->toArray();
    }

    public function getRegionByCode($code)
    {
    	return $this->fetchAll(array(
    		'CODEREG = ?' => $code
    	))->toArray();
    }

    public function getLikeRegion($region)
    {
    	$select = $this->select();
    	$select->where('NOM_REG LIKE  ?', '%'.strtoupper($region).'%');
    	return $this->fetchAll($select)->toArray();
    }


}

