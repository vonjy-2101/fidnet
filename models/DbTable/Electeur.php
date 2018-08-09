<?php

class Application_Model_DbTable_Electeur extends Zend_Db_Table_Abstract
{

    protected $_name = 'electeur';

    public function getAllElecteur()
    {
    	return $this->fetchAll()->toArray();
    }

    public function getElecteurByCode($codeReg,$codeDist,$codeComm,$codeFkt)
    {
    	return $this->fetchAll(
    		array(
    			'id_reg = ?' => $codeReg,
    			'id_dist = ?' => $codeDist,
    			'id_comm = ?' => $codeComm,
    			'id_fkt = ?' => $codeFkt
    		)
    	)->toArray();
    }

    public function getElecteurByRegion($codeReg)
    {
    	return $this->fetchAll(
    		array('id_reg = ?' => $codeReg)
    	)->toArray();
    }
    
    public function getCountElecteurByDistrict($codeReg)
    {
        $selectElecteur = $this->select()->distinct()->setIntegrityCheck(false);
        $selectElecteur->from('electeur',array('count(*)'));
        $selectElecteur->join(array('district'), 'electeur.id_dist=district.CODEDIST');
        $selectElecteur->where('electeur.id_reg = '.$codeReg.'');
        $selectElecteur->group('electeur.id_dist');
        return $this->fetchAll($selectElecteur)->toArray();
    }

}

