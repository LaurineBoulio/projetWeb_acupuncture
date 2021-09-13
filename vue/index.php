<!DOCTYPE html>
<html lang="fr">

    <head>
		<meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>Accueil | Acupuncture2000</title>
	 <link rel="icon" type="image/png" href="icone" />
	</head>

    <body>

        <div id="header">
            <img id="icone" class="icone" src="icone" alt="icone">
            <h1>Acupuncture 2000</h1>
            <div id="corps">
                <div id="seConnecter">
                    <h2>Se connecter</h2>
                    <form action="#" method="get" name="formConnexion" accept-charset="utf-8" autocomplete="on">
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