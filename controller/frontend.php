<?php
require("model/MembersManager.php");

function registration(){
	
	require("view/frontend/registrationView.php");
}

function connexion(){

	require("view/frontend/connexionView.php");
}

function registreMenbers($pseudo,$hash_pass,$mail)
{
	$hash_pass=password_hash($hash_pass,PASSWORD_DEFAULT);
	$member=new MembersManager();
	$authentify=$member->connexionMembers($pseudo);
	if ($authentify==true)
	{
		echo "Identifiant non disponible .Veuillez choisir un autre identifiant";	
	}
	else{
		$registration=$member->addMembers($pseudo,$hash_pass,$mail);
		if($registration==false){

			throw new
				Exception('Inscription échoué');
		}
		else{
			header('Location:index.php?action=connexion');
		}
	}

}

function connectMembers($pseudo,$passwd)
{

	$connect=new MembersManager();
	$authentify=$connect->connexionMembers($pseudo);
	

	
	
	if (password_verify($passwd,$authentify['passwd']))

	{
		session_start();
		$_SESSION['pseudo']=$pseudo;
		echo 'connexion reussie';
		header('Location:index.php?action=profil');
	

	
	
	}
	else{
		
		throw new Exception ('Pseudo ou mot de passe incorrecte');
	}


}

function profilView()
{
require("view/frontend/profilView.php");
}
