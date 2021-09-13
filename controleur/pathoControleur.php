<?php

    include('../modele/Patho.php');

    $patjo = new Patho;

    $patho->patho();

    $this->loadView('../vue/concultation/consultation.php', $patho)



?>