<?php
/* Smarty version 3.1.39, created on 2021-11-11 18:17:34
  from 'D:\wamp64\www\projetWeb_acupuncture\vue\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618d5e3e2ebb04_77479882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4836da01d0bb82584ec15a64dbf65c38739e3315' => 
    array (
      0 => 'D:\\wamp64\\www\\projetWeb_acupuncture\\vue\\index.html',
      1 => 1636654633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../sharedfile/template.html' => 1,
  ),
),false)) {
function content_618d5e3e2ebb04_77479882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../sharedfile/template.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Accueil | Acupuncture2000</title>
    <link rel="icon" type="image/png" href="./img/icone.png" />
    
    <!-- Css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    
</head>

<body>
	<?php if (!((isset($_SESSION['pseudo'])))) {?>	
		<div id="corp_connexion">
			<h2>Se connecter</h2>
			<form action="./index.php?action=getLog" method="POST">
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
						<input type="submit" name="connexion" id="bouton" value="Connexion"> 
					</div>
				</div>
			</form>
		</div>
	<?php }?>	

    <!-- Intro -->
	<section class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<p>L’acupuncture est l’une des pratiques fondatrices de la médecine traditionnelle chinoise. Elle repose sur la stimulation de points spécifiques, situés à différents endroits du corps, à l’aide de plusieurs techniques physiques.</p>
				</div>
			</div>
		</div>
	</section>

	
	<!-- Slider -->
	<section class="slider">
		<div class="container-fluid">
			<div class="row no-gutter">
				<div class="col-lg-12">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img src="./img/slide-1.png" alt="slide">
						</div>

						<div class="item">
						  <img src="./img/slide-2.jpg" alt="slide">
						</div>

						<div class="item">
						  <img src="./img/slide-3.jpg" alt="slide">
						</div>

						<div class="item">
						  <img src="./img/slide-4.jpg" alt="slide">
						</div>
					  </div>
					  
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<!-- Copyright -->
	<footer>
		<div class="container">
			<p class="text-center">2021 - Projet TIDAL - Acupuncture2000</a></p>
		</div>
	</footer>
	
	<a href="#page-top" class="cd-top">Top</a>

    <!-- script -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/modernizr.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
