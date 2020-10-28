<?php
require("controller/frontend.php");
try
{
	
	if(isset($_GET['action']))
	{
	
		
		if ($_GET['action']=='registration')
		{

			if (!empty($_POST['pseudo']) AND !empty($_POST['passwd']) AND !empty($_POST['passwdc']) AND !empty($_POST['email']))
			{
				if($_POST['passwd']==$_POST['passwdc'])
				{

					registreMenbers($_POST['pseudo'],$_POST['passwd'],$_POST['email']);
				}else{
				echo "Les mots de passe ne sont pas identiques";
				}

			}else
			{

				echo "Veuiller remplir tous les champs svp";
			}
		}
		else if($_GET['action']=='regpage'){


			registration();
		}	
		
		else  if($_GET['action']=='connexion')
		{

			connexion();
		}

		else if($_GET['action']=='connectMembers')
		{
			if(!empty($_POST['pseudo']) AND !empty($_POST['passwd']))
			{
				connectMembers($_POST['pseudo'],$_POST['passwd']);
			}else{
				throw new 
					Exception('Veuiller entrer votre  ou pseudo et votre mot de passe pour vous connecter.');
			}
		}

		else if($_GET['action']=='profil')
		{
			profilView();


		}
	
	        
	}
	else
	{
	registration();
	}
}
catch(Exception $e)
{

	die('Erreur:'.$e->getMessage());
}

