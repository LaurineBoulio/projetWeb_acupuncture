<?php
/* Smarty version 3.1.39, created on 2021-11-09 18:21:37
  from 'D:\wamp64\www\projetWeb_acupuncture\vue\consultation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618abc31f06344_07938336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b47b337a867f9eed99fdee22016f603e4fc76aa0' => 
    array (
      0 => 'D:\\wamp64\\www\\projetWeb_acupuncture\\vue\\consultation.html',
      1 => 1636482085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../sharedfile/template.html' => 1,
  ),
),false)) {
function content_618abc31f06344_07938336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../sharedfile/template.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
            <form action="./index.php?action=getCons" method="POST">
                <div id="formulaire">
                    <h3>Critères : </h3>
                        <div class ="champs">
                            <label name="meridiens" for="meridiens">Liste des Méridiens</label>
                            <select class="form-select" id="meridiens" name="meridiens">
                                <option selected="selected" value="">Choisir un filtre</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lMeri']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['nom'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>                             
                        </div>
                        <div class ="champs">
                            <label name="pathologies" for="pathologies">Liste des types de pathologies</label>
                            <select class="form-select" id="pathologies" name="pathologies">
                                <option selected="selected" value="">Choisir un filtre</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lPatho']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['desc'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                
                           
                            </select>                    
                        </div>
                        <div id ="boutons">
                            <input type="submit" name="valider" id="valider" value="Valider"> 
                            <input type="reset" name="reinitialiser" id="reinitialiser" value="Réinitialiser">
                            <!--
                                <a href="./index.php?action=listepatho" class="btn btn-dark" type="button">Réinitialiser</a>
                            -->
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
