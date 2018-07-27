<?php

class MapController extends Zend_Controller_Action
{
	private $fokontanyORM ;
    private $regionORM ;
    private $districtORM ;
    private $communeORM ;
	private $electeurORM ;

    public function init()
    {
        $this->fokontanyORM = new Application_Model_DbTable_Fokontany();
        $this->regionORM = new Application_Model_DbTable_Region();
        $this->districtORM = new Application_Model_DbTable_District();
        $this->communeORM = new Application_Model_DbTable_Commune();
        $this->electeurORM = new Application_Model_DbTable_Electeur();
    }

    public function indexAction()
    {

    }

    public function getinfoAction()
    {
    	$this->_helper->layout()->disableLayout();
        $region = $this->regionORM->getLikeRegion($_POST['region']);
        $countRegionElecteur = $this->electeurORM->getElecteurByRegion($region[0]['CLEREG']);
        $electeur = $this->electeurORM->getCountElecteurByDistrict($region[0]['CLEREG']);
        
        $html = "";
        $html = "<h3> ELECTEURS INSCRIT : ".sizeof($countRegionElecteur)." </h3>";
        $html .= "<table class='table table-striped table-bordered'  >";
        $html .= "<thead style='background:#00a65a;color:white'>";
        $html .= "<th>DISTRICT</th>";
        $html .= "<th>NOMBRE INSCRIT</th>";
        $html .= "</thead>";
        $html .= "<tbody>";
        foreach ($electeur as $key => $value) {
            $html .= "<tr>";
            $html .= "<td>". $value['NOM_DIST'] ."</td>";
            $html .= "<td>". $value['count(*)'] ."</td>";
            $html .= "</tr>";
        }
        $html .= "</tbody>";
        $html .= "</table>";

        echo $html;
     //    var_dump($region);
     //    var_dump($electeur);
    	// var_dump($this->districtORM->getDistrictByRegion($region[0]['CODEREG']));
    	// var_dump($_POST);
    }



}

