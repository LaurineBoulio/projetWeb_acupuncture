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

}

?>