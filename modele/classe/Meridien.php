<?php
	


class Meridien {
    private $bdd;
    private $_code;
    private $_nom;
    private $_element;
    private $_yin;

    public function __construct(){
        $this->$bdd = NULL;
        $this->$_code = NULL;
        $this->$_nom = NULL;
        $this->$_element = NULL;
        $this->$_yin = NULL;
    }


    function getCode(){
        return $this->$_code;
    }
    function getNom(){
        return $this->$_nom;
    }
    function getElement(){
        return $this->$_element;
    }
    function getYin(){
        return $this->$_code_yin;
    }

    function setCode($code){
        $this->$_code = $code;
    }
    function setNom($nom){
        $this->$_nom = $nom;
    }
    function setElement($element){
        $this->$_element = $element;
    }
    function setYin($yin){
        $this->$_yin = $yin;
    }

    public static function listeMeridiens(){
        $bdd = connectDb();
        $req = $bdd->query("SELECT nom, code FROM meridien");
        $resultat = $req->fetchAll();
        return $resultat;
    }    
}

?>