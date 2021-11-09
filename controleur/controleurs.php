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
    require_once ('./modele/RechercheConsultation.php');

    function consultation(){

        if(!isset($_POST['meridiens'])){
            $_POST['meridiens']='';
        }
        $filtre1= htmlspecialchars($_POST['meridiens']);

        if(!isset($_POST['pathologies'])){
            $_POST['pathologies']='';
        }
    
        $rechercheListe = rechercheFiltres($_POST['meridiens'], $_POST['pathologies']);
    
        $filtre2= htmlspecialchars($_POST['pathologies']);

        $liste_patho = Patho::listePathologies();   
        $liste_meridien = Meridien::listeMeridiens();

        $smarty=new Smarty;
        $smarty->assign('lPatho', $liste_patho);
        $smarty->assign('lMeri', $liste_meridien);
        $smarty->assign('lRecherche', $rechercheListe);

/*         $smarty->assign('fMeri', $filtre1);
        $smarty->assign('fPatho', $filtre2); */
        $smarty->assign('user', $_SESSION['pseudo']);
        $smarty->display('../vue/consultation.html');          
    }

    function login(){
        $smarty=new Smarty;
       
        
        if(!empty($_POST['nom_utilisateur']) && !empty($_POST['mdp'])){
            Inscription::coLogin($_POST['nom_utilisateur'], $_POST['mdp']);
        }
        echo '<br>'.'utilisateur : '.$_SESSION['pseudo'];
        $smarty->assign('user', $_SESSION['pseudo']);

        $smarty->display('../vue/index.html');
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
            $smarty->display('../vue/confirmation.html');
        }else{
            $smarty->display('../vue/inscription.html');
        }        
    }
 
    function recheh(){
        $smarty=new Smarty;
     
        if(!empty($_POST['recherche'])){
            $motsListe = Symptome::rechercheMot($_POST['recherche']);
        }else{
            $motsListe = array();
        }
        $smarty->assign('lMots', $motsListe);
     
        $smarty->display('../vue/recherche.html');
    }
    
    function accueil(){
        $smarty=new Smarty;
        $smarty->display('../vue/index.html');
    }

    function deconnexion(){
        $_SESSION = array();
        session_destroy();
        unset($_SESSION);
      
        $smarty = new Smarty;
        $smarty->display('./vue/index.html');
    }
