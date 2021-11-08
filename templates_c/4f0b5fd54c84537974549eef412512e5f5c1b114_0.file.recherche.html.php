<?php
/* Smarty version 3.1.39, created on 2021-11-08 13:36:07
  from 'C:\wamp\www\projetWeb_acupuncture\vue\recherche\recherche.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618919b725af40_83211283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f0b5fd54c84537974549eef412512e5f5c1b114' => 
    array (
      0 => 'C:\\wamp\\www\\projetWeb_acupuncture\\vue\\recherche\\recherche.html',
      1 => 1633007792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618919b725af40_83211283 (Smarty_Internal_Template $_smarty_tpl) {
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
