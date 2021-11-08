<?php
	

class Patho {
    private $bdd;
    private $_idP;
    private $_mer;
    private $_type;
    private $_desc;

    public function __construct(){
        $this->$bdd = NULL;
        $this->$_idP = NULL;
        $this->$_mer = NULL;
        $this->$_type = NULL;
        $this->$_desc = NULL;
    }


    function getIdP(){
        return $this->$_idP;
    }
    function getMer(){
        return $this->$_mer;
    }
    function getType(){
        return $this->$_type;
    }
    function getDesc(){
        return $this->$_desc;
    }

    function setIdP($idP){
        $this->$_idP = $idP;
    }
    function setMer($mer){
        $this->$_mer = $mer;
    }
    function setType($type){
        $this->$_type = $type;
    }
    function setDesc($desc){
        $this->$_desc = $desc;
    }

    function SearchPatho(){
        $arrayConsultation = array();
        $bdd = connectDb();
        $req = $bdd->query('SELECT * FROM patho');
        $resultat = $req->fetchAll();
        $nbre_lignes = count($resultat);
        foreach($resultat as $row) {
            $arrayConsultation[] = array(
                "idP" => $row['idP'],
                "mer" => $row['mer'],
                "type" => $row['type'],
                "desc" => $row['desc'],
            );
        }
        return $arrayConsultation;
    }

    public static function listePathologies(){
        $bdd = connectDb();
        $req = $bdd->query("SELECT `type`, `desc` FROM patho");
        $resultat = $req->fetchAll();
        return $resultat;    
    }

}

?>