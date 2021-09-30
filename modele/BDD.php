<?php
		echo "Fichier : chemin.php<br/>" ;
            echo "<br/>";
             
            echo "Le chemin relatif est :<br/>";
            echo realpath('chemin.php'); 
            echo "<br/>";
            echo "<br/>";
             
            echo "Le chemin absolu est :<br/>";
            echo $_SERVER['PHP_SELF'];
            
	function connectDb(){
      $host = '127.0.0.1'; // ou sql.hebergeur.com
      $user = 'root';      // ou login
      $pwd = '';      // ou xxxxxx
      $db = 'acupuncture';
	try {
       $bdd = new PDO('mysql:host='.$host.';dbname='.$db.
                      ';charset=utf8', $user, $pwd,
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
       return $bdd;
	   
      } catch (Exception $e) {
       exit('Erreur : '.$e->getMessage());
	  }
  }

?>





