<?php

    include('../modele/Patho.php');

    $patho = new Patho;

    $patho->patho();

    $this->loadView('../vue/consultation/consultation.php', $patho)



?>