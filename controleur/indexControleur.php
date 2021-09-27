<?php
session_start();

require('./controleurs.php');

$action = isset($_GET['action']) ? $_GET['action'] : NULL;

 
    if($action=="getIns"){
        insertinscript();
    }elseif($action=="getCons"){
        consultation();
    }elseif($action=="getRecheh"){
        recheh();
    }
    else{
        login();
    }


}