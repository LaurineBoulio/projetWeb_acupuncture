<?php
	


class Keywords {
    private $bdd;
    private $_idK;
    private $_name;

    public function __construct(){
        $this->$bdd = NULL;
        $this->$_idK = NULL;
        $this->$_name = NULL;
    }


    function getIdK(){
        return $this->$_idK;
    }
    function getName(){
        return $this->$_name;
    }

    function setIdK($idK){
        $this->$_idK = $idK;
    }
    function setName($name){
        $this->$_name = $name;
    }

}

?>