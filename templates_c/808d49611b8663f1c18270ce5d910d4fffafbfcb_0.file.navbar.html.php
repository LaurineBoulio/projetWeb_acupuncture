<?php
/* Smarty version 3.1.39, created on 2021-11-09 20:04:47
  from 'D:\wamp64\www\projetWeb_acupuncture\sharedfile\navbar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618ad45f144273_10125662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '808d49611b8663f1c18270ce5d910d4fffafbfcb' => 
    array (
      0 => 'D:\\wamp64\\www\\projetWeb_acupuncture\\sharedfile\\navbar.html',
      1 => 1636386330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ad45f144273_10125662 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/style.css">
<link rel="stylesheet"  href="css/bootstrap.css">

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand top" href="#">
				<img src="img/logo.png" alt="">
			</a>
		</div>

		<div class="collapse navbar-collapse" id="main-menu">
		   <ul class="nav navbar-nav navbar-right">
			<li><a href="./index.php?action=getAcc">Accueil</a></li>
			<li><a href="./index.php?action=getCons">Consulter les pathologies</a></li>
			<li><a href="./index.php?action=getRecheh">Recherche par mots-clés</a></li>
			<li><a href="./index.php?action=getIns">S'inscrire</a></li>
			<li><a href="./index.php?action=getLog">Se connecter</a></li>
			<li><a href="">Se déconnecter</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav><?php }
}
