
<?php

    function rechercheFiltres($meridien, $patho){
        $bdd = connectDb();
        $req = $bdd->query(" SELECT m.nom as nom, p.desc as `desc` FROM meridien m, patho p WHERE p.type= '".$patho."' AND m.code = '".$meridien."' ");
        $resultat = $req->fetchAll();
        return $resultat;
    }    
    
?>	