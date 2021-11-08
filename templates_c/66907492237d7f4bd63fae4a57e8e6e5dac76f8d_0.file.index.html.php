<?php
/* Smarty version 3.1.39, created on 2021-11-08 15:33:07
  from 'D:\wamp64\www\TIDAL\projetWeb_acupuncture\vue\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61894333e959e0_90762111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66907492237d7f4bd63fae4a57e8e6e5dac76f8d' => 
    array (
      0 => 'D:\\wamp64\\www\\TIDAL\\projetWeb_acupuncture\\vue\\index.html',
      1 => 1636385548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../sharedfile/template.html' => 1,
  ),
),false)) {
function content_61894333e959e0_90762111 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <form action="./index.php?action=getLog" method="POST" name="formConnexion" accept-charset="utf-8" autocomplete="on">
                        <div id="formulaire">
                        
                            <div class ="champs">
                                <label for="nom_utilisateur">Nom d'utilisateur : </label>
                                <input type="text" id="nom_utilisateur" name="nom_utilisateur">	
                            </div>

                            <div class ="champs">
                                <label for="mdp">Mot de passe : </label>
                                <input type="password" id="mdp" name="mdp">	
                            </div>

                            <div id ="boutons">
                                <input type="submit" name="connexion" id="valider" value="connexion"> 
                            </div>
<!--
                            <div id ="boutons">
                                <input type="button" onclick="window.location.href = './index.php?action=getIns';" id="inscription" value="inscription"/> 
                            </div>
                        -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="consultation">
            <h2><a href="./index.php?action=getCons">Consulter les pathologies (avec filtre)</a> </h2>
        </div>

        <div id="inscription">
            <h2><a href="./index.php?action=getIns">Ins</a> </h2>
        </div>

        <div id="recherche">
            <h2><a href="./index.php?action=getRecheh">Rechercher des pathologies par mots-clés</a></h2>
        </div>

    </body><?php }
}
