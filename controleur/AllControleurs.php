<?php
    
    $formConsultation = $_POST['formConsultation'] ?? array();

    $consultationDonnees = Patho::SearchPatho();

   if($formConsultation != '')

   

    function consultation(){
        $smarty=new Smarty;
        $smarty-display('../vue/consultation/consultation.html');
    }

    function login(){
        $smarty=new Smarty;
        $smarty-display('../vue/index.html');
    }
    

    function insertinscript(){
        $smarty=new Smarty;
        $smarty-display('../vue/inscription/inscription.html');
        if(!empty())
        $_POST['nom'];
    }

    function recheh(){
        $smarty=new Smarty;
        $smarty-display('../vue/recherche/recherche.html');
    }

    


    


    

?>