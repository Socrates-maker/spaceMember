<?php $title='Connection';?>
<?php ob_start();?>
<h1>Page de connection</h1>
<div class="container">
<p>Entrer votre identifiant et votre mot de passe pour vous connecter</p>

</div>
<div class="container">
<form action="index.php?action=connectMembers" method="POST">
<div class="form-group">
	<label for="pseudo">Pseudo</label>
	<input type="text" name="pseudo" class="form-control">
</div>
<div class="form-group">
	<label for="passwd" >Mot de passe</label>
	<input type="password" name="passwd" class="form-control">
</div>
<div class="form-group">
<input type="checkbox" name="checkbox">
<label>Connexion automatique</label>
</div>

<div class="form-group">

	<input type="submit" value="connexion" class=" btn-primary">
</div>
</form>
<p> Vous n'avez pas de compte ? Appuyez sur le bouton suivant pour vous inscrire</p>
<button ><a href="index.php?action=regpage">Inscription</a></button>
</div>
<?php $content=ob_get_clean();?>

<?php require('template.php');?>
