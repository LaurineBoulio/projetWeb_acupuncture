<?php

class Inscription {
    //private $bdd;
    private $_id;
    private $_nom;
    private $_prenom;
    private $_pseudo;
    private $_telephone;
    private $_mdp;


    public function __construct(){
        //$this->$bdd = NULL;
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


    public function insertInscript($nom, $prenom, $pseudo, $mail, $telephone, $mdp){
        $bdd = connectDb();
        $req = $bdd->query("INSERT INTO inscription (nom, prenom, pseudo,  telephone, mdp) VALUES ('".$nom."', '".$prenom."', '".$pseudo."', '".$telephone."', 'ur') ");
        echo "INSERT INTO inscription (nom, prenom, pseudo,  telephone, mdp) VALUES ('".$nom."', '".$prenom."', '".$pseudo."', '".$telephone."', 'ur') ";
        $resultat = $req->fetchAll();
    }

/*
    function coLogin($pseudo, $mdp){
        $bdd = connectDb();
        $req = $bdd->query('SELECT * FROM inscription WHERE pseudo = {$pseudo} AND mdp = {$mdp}');
        $resultat = $req->fetchAll();
    }
*/
/*
    public function insertInscript($nom, $prenom, $pseudo, $mail, $telephone, $mdp){
        try{
            $db = new PDO('mysql:host=localhost;dbname=acupuncture', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(PDOException $e){
            $e->getMessage();
        }

        $cyptedpassword_user = password_hash($password_user, PASSWORD_DEFAULT);
        $cyptedpassword_user2 = password_hash($password_user2, PASSWORD_DEFAULT);

        $req = "SELECT id FROM inscription WHERE mail = '".$email_user."'";
        $resp = $db->query($req);
        $data = $resp->fetch();

        $smarty = new Smarty;
        if($data == null){
            if(password_verify($mdp,$cyptedpassword_user2)){
                $req = 'INSERT INTO inscription (nom, prenom, pseudo, mail, telephone mdp) VALUES ({$nom}, {$prenom}, {$pseudo}, {$mail}, {$telephone}, {$mdp})';
                $resp = $db->query($req);
                /*
                $_SESSION['id_user']=$data['id_user'];
                $_SESSION['fname_user']=$data['fname_user'];
                $_SESSION['lname_user']=$data['lname_user'];
                */
   

}

?>