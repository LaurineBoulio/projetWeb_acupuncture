<?php
/* Smarty version 3.1.39, created on 2021-09-30 13:13:07
  from 'D:\wamp64\www\projetWeb_acupuncture\vue\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155b7e3bb5d25_04211583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4836da01d0bb82584ec15a64dbf65c38739e3315' => 
    array (
      0 => 'D:\\wamp64\\www\\projetWeb_acupuncture\\vue\\index.html',
      1 => 1633004766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../sharedfile/template.html' => 1,
  ),
),false)) {
function content_6155b7e3bb5d25_04211583 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:../sharedfile/template.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
  
		<meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>Accueil | Acupuncture2000</title>
	 <link rel="icon" type="image/png" href="icone.png" />
	</head>

    <body>

        <div id="header">

            <img id="icone" class="icone" src="icone.png" alt="icone">
            <h1>Acupuncture 2000</h1>
            
            <div id="corps">
                <div id="seConnecter">
                    <h2>Se connecter</h2>
                    <form action="../controleur/indexControleur.php?action=getLog" method="get" name="formConnexion" accept-charset="utf-8" autocomplete="on">
                        <div id="formulaire">
                        
                            <div class ="champs">
                                <label for="nom_utilisateur">Nom d'utilisateur : </label>
                                <input type="text" id="nom_utilisateur" name="nom_utilisateur">	
                            </div>

                            <div class ="champs">
                                <label for="mdp">Mot de passe : </label>
                                <input type="text" id="mdp" name="mdp">	
                            </div>

                            <div id ="boutons">
                                <input type="submit" name="connexion" id="valider" value="connexion"> 
                            </div>

                            <div id ="boutons">
                                <input type="button" onclick="window.location.href = 'inscription/inscription.html';" id="inscription" value="inscription"/> 
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="consultation">
            <h2><a href="consultation/consultation.html">Consulter les pathologies (avec filtre)</a> </h2>
        </div>

        <div id="recherche">
            <h2><a href="recherche/recherche.html">Rechercher des pathologies par mots-clés</a></h2>
        </div>

    </body><?php }
}
