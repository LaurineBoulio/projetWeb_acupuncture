
<?php


    function consultaion(){
        $arraryConsultation = array();
        $bdd = connectDb();
        $req = $bdd->query('SELECT * FROM patho');
        $resultat = $req->fetchAll();
        $nbre_lignes = count($resultat);
        foreach($resultat as $row) {
            $arraryConsultation[] = array(
                "idP" => $row['idP'],
                "mer" => $row['mer'],
                "type" => $row['type'],
                "desc" => $row['desc'],
            );
        }
    }
   

    /*
    foreach ($arraryConsultation as $key => $value) {
        echo $arraryConsultation[$key]['idP'].'<br>'.'<br>';
        echo $arraryConsultation[$key]['mer'].'<br>'.'<br>';
        echo $arraryConsultation[$key]['type'].'<br>'.'<br>';
        echo $arraryConsultation[$key]['desc'].'<br>'.'<br>';
    }
    */

    

    function rechercheFiltres($meridien, $patho){
        $bdd = connectDb();
        $req = $bdd->query(" SELECT m.nom as nom, p.desc as `desc` FROM meridien m, patho p WHERE p.type= '".$patho."' AND m.code = '".$meridien."' ");
        $resultat = $req->fetchAll();
        return $resultat;
    }    
    


?>	