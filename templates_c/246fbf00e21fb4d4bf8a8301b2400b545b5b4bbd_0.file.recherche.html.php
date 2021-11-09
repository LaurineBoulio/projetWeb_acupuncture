<?php
/* Smarty version 3.1.39, created on 2021-11-09 18:25:18
  from 'D:\wamp64\www\projetWeb_acupuncture\vue\recherche.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618abd0e9f9326_07083041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '246fbf00e21fb4d4bf8a8301b2400b545b5b4bbd' => 
    array (
      0 => 'D:\\wamp64\\www\\projetWeb_acupuncture\\vue\\recherche.html',
      1 => 1636482139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../sharedfile/template.html' => 1,
  ),
),false)) {
function content_618abd0e9f9326_07083041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../sharedfile/template.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!DOCTYPE html>
<html lang=fr dir="ltr">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="./recherche.css">
		<title>Recherche | Acupuncture2000</title>
	 <link rel="icon" type="image/png" href="../icone.png" />
	</head>
    <body>
        <header>
            <!-- <div includeHTML="../../shared/header.html"></div> -->
        </header>

        <div id="corps">
            <h2>Recherche par mot clef</h2>
            <form action="../../index.php?action=getRecheh" method="get" name="formSaisie" accept-charset="utf-8">
                <div id="formulaire">
                
                    <div class ="champs">
                        <label for="recherche">Tapez votre mot clef : </label> 
					    <input type="text" id="recherche" name="recherche">
                    </div>	

                    <div id ="boutons">
                        <input type="submit" name="valider" id="valider" value="Valider" disabled> 
                    </div>   

                </div>
            </form>
        </div>
        <footer>
            <!-- <div includeHTML="../../shared/footer.html"></div> -->
        </footer>
        <!--<?php echo '<script'; ?>
 type="module" src="./reservation.js"><?php echo '</script'; ?>
> -->
    </body>
   <!--<?php echo '<script'; ?>
 type="text/javascript" src="../../Shared/incHeaderFooter.js"><?php echo '</script'; ?>
> -->
</html>


<?php }
}
