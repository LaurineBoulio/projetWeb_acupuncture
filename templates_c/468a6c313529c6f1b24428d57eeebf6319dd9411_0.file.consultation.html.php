<?php
/* Smarty version 3.1.39, created on 2021-09-30 14:17:41
  from 'D:\wamp64\www\projetWeb_acupuncture\vue\consultation\consultation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155c70529cb95_46372368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '468a6c313529c6f1b24428d57eeebf6319dd9411' => 
    array (
      0 => 'D:\\wamp64\\www\\projetWeb_acupuncture\\vue\\consultation\\consultation.html',
      1 => 1633011163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../sharedfile/template.html' => 1,
  ),
),false)) {
function content_6155c70529cb95_46372368 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:../../sharedfile/template.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!DOCTYPE html>
<html lang=fr dir="ltr">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="./consultation.css">
		<title>Consultation | Acupuncture2000</title>
	 <link rel="icon" type="image/png" href="../icone" />
	</head>
    <body> 
           
    



        <header>
        
        
        
        </header>

        <div id="corps">
            <h2>Consultation des pathologies</h2>
            <form action="../../index.php?action=getCons" method="get" name="formSaisie" accept-charset="utf-8">
                <div id="formulaire">
                    <h3>Critères : </h3>
                    <div id ="checkbox">

                        <div class ="champs">
                            <input type='checkbox' name='meridien' value='meridien'>Méridien<br>                    
                        </div>
                        <div class ="champs">
                            <input type='checkbox' name='type_patho' value='type_patho'>Type de pathologie<br>                    
                        </div>
                        <div class ="champs">
                            <input type='checkbox' name='caracteristique' value='caracteristique'>Caractéristiques<br>                    
                        </div>

                        <div id ="boutons">
                            <input type="submit" name="valider" id="valider" value="Valider"> 
                        </div>   
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
