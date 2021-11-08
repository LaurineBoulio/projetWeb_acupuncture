<?php
/* Smarty version 3.1.39, created on 2021-11-08 14:57:35
  from 'D:\wamp64\www\TIDAL\projetWeb_acupuncture\sharedfile\template.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61893adf8a36e9_71315414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf8d268ce57123456df7196d1b3f1eb1122115da' => 
    array (
      0 => 'D:\\wamp64\\www\\TIDAL\\projetWeb_acupuncture\\sharedfile\\template.html',
      1 => 1636381118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.html' => 1,
  ),
),false)) {
function content_61893adf8a36e9_71315414 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html> <!--a changer avec notre structure-->
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Acupuncture2000 | </title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../vue/inscription/inscription.css">
  <link rel="stylesheet" href="../vue/consultation/consultation.css">
  <link rel="stylesheet"  href="../bootstrap.css">
  <link rel="icon" type="image/png" href="../icone" />
  
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender("file:./navbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
 type="module" src="../vue/inscription/inscription.js"><?php echo '</script'; ?>
>
  
<?php }
}
