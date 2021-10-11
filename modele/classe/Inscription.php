<?php

class Inscription {
    //private $bdd;
    private $_id;
    private $_nom;
    private $_prenom;
    private $_pseudo;
    private $mail;
    private $_telephone;
    private $_mdp;


    public function __construct(){
        //$this->$bdd = NULL;
        $this->$_id = NULL;
        $this->$_nom = NULL;
        $this->$_prenom = NULL;
        $this->$_pseudo = NULL;
        $this->$_mail = NULL;
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
    function getMail(){
        return $this->$_mail;
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
    function setMail($mail){
        $this->$_mail = $mail;
    }
    function setTelephone($telephone){
        $this->$_telephone = $telephone;
    }
    function setMdp($mdp){
        $this->$_mdp = $mdp;
    }


    public static function insertInscript($nom, $prenom, $pseudo, $mail, $telephone, $mdp){
        
        $bdd = connectDb();
        $pseudoPrix = false;
        $reqVerif = $bdd->query("SELECT pseudo FROM inscription");
        $resultat = $reqVerif->fetchAll();
        $nbre_lignes = count($resultat);
        foreach($resultat as $row) {
            if($row['pseudo'] == $pseudo){
                $pseudoPrix = true;
            }
        }

        if(!$pseudoPrix){
            $mdpCryt = password_hash($mdp, PASSWORD_DEFAULT);
            
            $reqInsert = $bdd->query("INSERT INTO inscription (nom, prenom, pseudo,  mail, telephone, mdp) VALUES ('".$nom."', '".$prenom."', '".$pseudo."', '".$mail."', '".$telephone."', '".$mdpCryt."') ");
            //echo "INSERT INTO inscription (nom, prenom, pseudo, mail, telephone, mdp) VALUES ('".$nom."', '".$prenom."', '".$pseudo."', '".$mail."', '".$telephone."', , '".$mdp."') ";
            //$resultat = $req->fetch();
        }


    }


    public static function coLogin($pseudo, $mdp){
        $bdd = connectDb();
        $req = $bdd->query("SELECT * FROM inscription WHERE pseudo = '".$pseudo."' ");
        $resultat = $req->fetchAll();
        $nbre_lignes = count($resultat);
        foreach($resultat as $res) {
            if(password_verify($mdp, $res['mdp'])){ // Vérifie qu'un mot de passe correspond à un hachage
                $_SESSION['id'] = $res['id'];
                $_SESSION['pseudo'] = $res['pseudo'];
                $_SESSION['nom'] = $res['nom'];
                $_SESSION['mail'] = $res['mail'];
            
            }
        //echo '<br>'.'utilisateur : '.$_SESSION['pseudo'];
        }    
    }
   

}

?>