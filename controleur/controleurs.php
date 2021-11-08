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
        
        if(!empty($_POST['nom_utilisateur']) && !empty($_POST['mdp'])){
            Inscription::coLogin($_POST['nom_utilisateur'], $_POST['mdp']);
            echo '<br>'.'utilisateur : '.$_SESSION['pseudo'];
        }
    } 

    function inscript(){
        $smarty=new Smarty;

        //$connect = Inscription::insertInscript();
        //$connect->insertInscript($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
        

        
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mdp'])){
            //insertInscript($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
            //$connect = Inscription::insertInscript($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
           //$inscription = new Inscription($i,$_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
          
            //$inscription.setId($i);
            Inscription::insertInscript($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['telephone'],  $_POST['mdp']);
            $smarty->display('../vue/inscription/confirmation.html');
        } else{
            $smarty->display('../vue/inscription/inscription.html');
        }        
    }
 
    function recheh(){
        $smarty=new Smarty;
        $smarty->display('../vue/recherche/recherche.html');
    }
    
    function accueil(){
        $smarty=new Smarty;
        $smarty->display('../vue/index.html');
    }

//mettre bouton déconnexion dans la navbar
    function deconnexion(){
        $_SESSION = array();
        session_destroy();
        unset($_SESSION);
      
        $smarty = new Smarty;
        $smarty->display('./vue/index.html');
      }
