<?php /* Smarty version Smarty-3.0.0, created on 2021-09-30 12:56:25
         compiled from ".\templates\../vue/index.html" */ ?>
<?php /*%%SmartyHeaderCode:10264642256155b3f9edebe5-35344721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '707277b21f63b1bc37abc90a4d038023ab51447d' => 
    array (
      0 => '.\\templates\\../vue/index.html',
      1 => 1633004766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10264642256155b3f9edebe5-35344721',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("../sharedfile/template.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
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

    </body>