<?php

class FidnetController extends Zend_Controller_Action
{

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction(){

    }

    public function loiAction(){

    }

    public function bureauAction(){
        $region = new Application_Model_DbTable_Region();
        $recup = $region->fetchAll(null,'CLEREG');
        $this->view->assign('region', $recup);

        if(isset($_POST['value'])){
            $electer = new Application_Model_DbTable_Electeur();
            $electer->insert(array(
                'nom_elec' => $_POST['nom_elec'],
                'prenom_elec' => $_POST['prenom_elec'],
                'datenaissance_elec' => $_POST['datenaissance_elec'],
                'sexe_elec' => $_POST['sexe_elec'],
                'antecedant_judiciaire_elec' => $_POST['antecedant_judiciaire_elec'],
                'num_cin_elec' => $_POST['num_cin_elec'],
                'profession_elec' => $_POST['profession_elec'],
                'id_bv' => $_POST['id_bv'],
                'id_reg' => $_POST['id_reg'],
                'id_comm' => 1,
                'id_dist' => 2,
                'id_fkt' => 3,
            ));

        }

    }

    public function telechargerAction(){

    }

    public function flowchartAction(){

    }

    public function faqAction(){

    }

    public function electeurAction(){

    }

}

