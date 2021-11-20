<?php

class Symptome {
    private $bdd;
    private $_idS;
    private $_desc;

    public function __construct(){
        $this->$bdd = NULL;
        $this->$_idS = NULL;
        $this->$_desc = NULL;
    }

    function getIdS(){
        return $this->$_idS;
    }
    function getDesc(){
        return $this->$_desc;
    }

    function setIdS($idS){
        $this->$_idS = $idS;
    }
    function setDesc($desc){
        $this->$_desc = $desc;
    }

    public static function rechercheMot($mot){
        $bdd = connectDb();
        $req = $bdd->query(" SELECT `desc` FROM symptome WHERE `desc` LIKE '".$mot." %'  OR `desc` LIKE '% ".$mot." %' OR `desc` LIKE '% ".$mot."' "); // 
        $resultat = $req->fetchAll();
        return $resultat;    
   
    

    }

}
?>