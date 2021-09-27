<?php
require('consultationControleur.php');
require('rechercheControleur.php');

if (isset($_GET['action'])) {
    /*
    if ($_GET['action'] == 'listPosts') {
        listPosts();
            //    $posts = getPosts();
            //  require('listPostsView.php');
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
}
else {
    listPosts();
    */

    if($action=="getIns"){
        insertinscript();
    }


}