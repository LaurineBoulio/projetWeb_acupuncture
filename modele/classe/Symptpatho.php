<?php
	


class Symptpatho {
    private $bdd;
    private $_idS;
    private $_idP;

    public function __construct(){
        $this->$bdd = NULL;
        $this->$_idS = NULL;
        $this->$_idP = NULL;
        $this->$_aggr = NULL;
    }


    function getIdS(){
        return $this->$_idS;
    }
    function getIdP(){
        return $this->$_idP;
    }
    function getAggr(){
        return $this->$_aggr;
    }

    function setIdS($idS){
        $this->$_idS = $idS;
    }
    function setDesc($idP){
        $this->$_idP = $idP;
    }
    function setAggr($aggr){
        $this->$_aggr = $aggr;
    }

}

?>