<?php $title='Inscription';?>
<?php ob_start();?>
<h1>Page d'inscription</h1>
<div class="container">

<p>Bienvenue dans notre espace membre.<br>
Veuilez remplir le Formulaire suivant pour vous inscrire.</p>
<form action="index.php?action=registration" method="POST">
	<div class="form-group">
		<label for="pseudo">Pseudo:</label>
		<input type="text" name="pseudo" class="form-control">
	</div>
	<div class="form-group">
		<label for="passwd">Mot de passe:</label>
		<input type="password" name="passwd" class="form-control">
	</div>

	<div class="form-group">
		<label for="passwdc">Retapper le mot de passe:</label>
		<input type="password" name="passwdc" class="form-control">
	</div>
	<div class="form-group" >
                 <label>Email:</label>
		<input type="email" class="form-control" name="email">
	</div>

	<div class="form-group">
		<input type="submit" class="btn-success" value="Valider">
	</div>
</form>
<p>Vous possedez déjà un compte?<br/>Cliquer sur le bouton connexion pour vous connecter</p>
<button><a  href="index.php?action=connexion">connection</a></button>
</div>
<?php $content=ob_get_clean();?>
<?php require("template.php");?>
