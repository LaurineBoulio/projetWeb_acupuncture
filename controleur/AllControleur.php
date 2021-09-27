<?php
    
    $formConsultation = $_POST['formConsultation'] ?? array();

    $consultationDonnees = Patho::SearchPatho();

   //if($formConsultation != '')

   //mettre la vue 


    function consultation(){
        $smarty=new Smarty;
        $smarty-display('../vue/consultation/consultation.php');
    }

    function login(){
        $smarty=new Smarty;
        $smarty-display('../vue/index.php');
    }


    function inscript(){
        $smarty=new Smarty;
        $smarty-display('../vue/inscription/inscription.php');
    }

    function recheh(){
        $smarty=new Smarty;
        $smarty-display('../vue/recherche/recherche.php');
    }



    

?>