<?php
session_start();

require('./controleur/controleurs.php');

$action = isset($_GET['action']) ? $_GET['action'] : NULL;

<<<<<<< HEAD
if($action=="getIns"){
    insertinscript();
}elseif($action=="getCons"){
    consultation();
}elseif($action=="getRecheh"){
    recheh();
}elseif ($action=="getLog") {
    login();
}else{
    accueil();
}
=======
 
    if($action=="getIns"){
        insertinscript();
    }elseif($action=="getCons"){
        consultation();
    }elseif($action=="getRecheh"){
        recheh();
    }elseif ($action=="getLog") {
        login();
    }
    else{
        accueil();
    }


>>>>>>> 61aba30e0e18deeb4a0657aca4683a6a33e08605
