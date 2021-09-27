<?php


class Keysympt {
    private $bdd;
    private $_idK;
    private $_idS;

    public function __construct(){
        $this->$bdd = NULL;
        $this->$_idK = NULL;
        $this->$_idS = NULL;
    }


    function getIdK(){
        return $this->$_idK;
    }
    function getIdS(){
        return $this->$_idS;
    }

    function setIdK($idK){
        $this->$_idK = $idK;
    }
    function setIdS($idS){
        $this->$_idS = $idS;
    }

}

?>