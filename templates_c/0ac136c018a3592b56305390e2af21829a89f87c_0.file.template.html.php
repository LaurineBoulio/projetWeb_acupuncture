<?php
/* Smarty version 3.1.39, created on 2021-11-09 18:13:42
  from 'D:\wamp64\www\projetWeb_acupuncture\sharedfile\template.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618aba560e0417_08666906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ac136c018a3592b56305390e2af21829a89f87c' => 
    array (
      0 => 'D:\\wamp64\\www\\projetWeb_acupuncture\\sharedfile\\template.html',
      1 => 1636386330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.html' => 1,
  ),
),false)) {
function content_618aba560e0417_08666906 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html> <!--a changer avec notre structure-->
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Acupuncture2000 | </title>
  <link rel="stylesheet" href="../vue/css/style.css">
  <link rel="stylesheet"  href="../vue/css/bootstrap.css">
  <link rel="icon" type="image/png" href="../vue/img/icone.png" />
  
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender("file:./navbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
 type="module" src="../vue/js/inscription.js"><?php echo '</script'; ?>
>
</body>
  
<?php }
}
