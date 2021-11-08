<?php
/* Smarty version 3.1.39, created on 2021-11-08 13:35:38
  from 'C:\wamp\www\projetWeb_acupuncture\vue\inscription\inscription.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189199a9956b0_80558322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13612facadfb2b3f95075286353349ef36cd7c28' => 
    array (
      0 => 'C:\\wamp\\www\\projetWeb_acupuncture\\vue\\inscription\\inscription.html',
      1 => 1633016889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../sharedfile/template.html' => 1,
  ),
),false)) {
function content_6189199a9956b0_80558322 (Smarty_Internal_Template $_smarty_tpl) {
?>	
    <?php $_smarty_tpl->_subTemplateRender("file:../../sharedfile/template.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!DOCTYPE html>
<html lang=fr dir="ltr">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="./inscription.css">
		<title>Inscription | Acupuncture2000</title>
	 <link rel="icon" type="image/png" href="../icone.png" />

	</head>
    <body>
        <header>
        </header>

        <div id="corps">
            <h2>Inscription</h2>
            <form action="./index.php?action=getIns" method="POST">
                <div id="formulaire">
                
                    <div class ="champs">
                        <label for="nom">Nom <span class="etoile">*</span> : </label> 
					    <input type="text" id="nom" name="nom">
                    </div>	
                    <div class ="champs">
                        <label for="prenom">Prénom <span class="etoile">*</span> : </label>
					    <input type="text" id="prenom" name="prenom">	
					</div>
                    <div class ="champs">
                        <label for="pseudo">Pseudo <span class="etoile">*</span> : </label>
                        <input type="text" id="pseudo" name="pseudo">	
                     </div>
                    <div class ="champs">
                        <label for="mail">Mail <span class="etoile">*</span> : </label>
                        <input type="text" id="mail" name="mail">	
                    </div>
                    <div class ="champs">
                        <label for="telephone">Télephone : </label>
                        <input type="tel" id="telephone" name="telephone">	
                    </div>
                    <div class ="champs">
                        <label for="mdp">Mot de passe <span class="etoile">*</span> : </label>
                        <input type="password" id="mdp" name="mdp">	
                    </div>
                    <div id ="boutons">
                        <input type="reset" name="reinitialiser" id="reinitialiser" value="Réinitialiser">
                        <input type="submit" name="valider" id="valider" value="Valider" > 
                    </div>   

                </div>
            </form>
        </div>
        <footer>
        </footer>
        <?php echo '<script'; ?>
 type="module" src="./inscription.js"><?php echo '</script'; ?>
>
    </body>
</html>

<?php }
}
