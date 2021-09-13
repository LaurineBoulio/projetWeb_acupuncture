
<?php
	require_once("./BDD.php");

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




?>	