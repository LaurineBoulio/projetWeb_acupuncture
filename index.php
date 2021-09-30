<?php
session_start();

require('./controleur/controleurs.php');

$action = isset($_GET['action']) ? $_GET['action'] : NULL;

$smarty=new Smarty;
if($action=="getIns"){

    inscript($smarty);
}elseif($action=="getCons"){
    consultation();
}elseif($action=="getRecheh"){
    recheh();
}elseif ($action=="getLog") {
    login();
}else{
    accueil();
}

