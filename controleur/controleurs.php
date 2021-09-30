<?php
require_once ('./modele/BDD.php');

    require_once ('./libs/Smarty.class.php');
    
    require_once ('./modele/classe/Inscription.php');
    require_once ('./modele/classe/Keysympt.php');
    require_once ('./modele/classe/Keywords.php');
    require_once ('./modele/classe/Meridien.php');
    require_once ('./modele/classe/Patho.php');
    require_once ('./modele/classe/Symptome.php');
    require_once ('./modele/classe/Symptpatho.php');

    function consultation(){
        $smarty=new Smarty;
        $smarty->display('../vue/consultation/consultation.html');
    }

    function login(){
        $smarty=new Smarty;
        $smarty->display('../vue/index.html');
        /*
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
            coLogin($_POST['pseudo'], $_POST['mdp']);
        }
        */
    } 

    function inscript($smarty){

        //$connect = Inscription::insertInscript();
        //$connect->insertInscript($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
        
        $inscription = new Inscription(1,$_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
        
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mdp'])){
            //insertInscript($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
            //$connect = Inscription::insertInscript($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
            $inscription::insertInscript($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
        } 
        
        $smarty->display('../vue/inscription/inscription.html');
        
             
    }
 
    function recheh(){
        $smarty=new Smarty;
        $smarty->display('../vue/recherche/recherche.html');
    }
    
    function accueil(){
        $smarty=new Smarty;
        $smarty->display('../vue/index.html');
    }

