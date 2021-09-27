<?php
	require_once("../BDD.php");


class Inscription {
    private $bdd;
    private $_id;
    private $_nom;
    private $_prenom;
    private $_pseudo;
    private $_telephone;
    private $_mdp;


    public function __construct(){
        $this->$bdd = NULL;
        $this->$_id = NULL;
        $this->$_nom = NULL;
        $this->$_prenom = NULL;
        $this->$_pseudo = NULL;
        $this->$_telephone = NULL;
        $this->$_mdp = NULL;
    }

    function getId(){
        return $this->$_id;
    }
    function getNom(){
        return $this->$_nom;
    }
    function getPrenom(){
        return $this->$_prenom;
    }
    function getPseudo(){
        return $this->$_pseudo;
    }
    function getTelephone(){
        return $this->$_telephone;
    }
    function getMdp(){
        return $this->$_mdp;
    }

    function setId($id){
        $this->$_id = $id;
    }
    function setNom($nom){
        $this->$_nom = $nom;
    }
    function setPrenom($prenom){
        $this->$_prenom = $prenom;
    }
    function setPseudo($pseudo){
        $this->$_pseudo = $pseudo;
    }
    function setTelephone($telephone){
        $this->$_telephone = $telephone;
    }
    function setMdp($mdp){
        $this->$_mdp = $mdp;
    }


    function insertInscript($nom, $prenom, $speudo, $mail, $telephone, $mdp){
        $bdd = connectDb();
        $req = $bdd->query('INSERT INTO inscription (nom, prenom, speudo, mail, telephone mdp) VALUES ({$nom}, {$prenom}, {$speudo}, {$mail}, {$telephone}, {$mdp})');
        $resultat = $req->fetchAll();
    }

    function insertInscript($nom, $prenom, $speudo, $mail, $telephone, $mdp){
        $bdd = connectDb();
        $req = $bdd->query('
        WHERE nom = {$nom} AND {$prenom} AND {$speudo} AND {$mail} AND {$telephone} AND {$mdp}');
        $resultat = $req->fetchAll();
    }




}

?>