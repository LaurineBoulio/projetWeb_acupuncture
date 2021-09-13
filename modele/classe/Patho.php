<?php


class Patho {
    private $bdd;
    private $idP;
    private $mer;
    private $type;
    private $desc;


    public function __construct(){
        $this->$bdd = NULL;
        $this->$idP = NULL;
        $this->$mer = NULL;
        $this->$type = NULL;
        $this->$desc = NULL;
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

}






/*
$foo = new Foo;
function getVarName()
{
     return 'aFuncName';
}
print $foo->{$foo->{getVarName()}}();

$manhattanBridge->longueur = 2089.0;
$manhattanBridge->largeur = 36.6;

$towerBridgeSurface = $towerBridge->getSurface();
$manhattanBridgeSurface = $manhattanBridge->getSurface();
*/


?>