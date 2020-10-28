<?php 
session_start();
$title='page de profil';
ob_start();

if (isset($_SESSION['pseudo']))
{
?>

<p>
Bonjour  <?=$_SESSION['pseudo']?>
</p>
<?php 
}
else {


?>
<p>
Vous êtes deconnecté
Retourner <a href="index.php?action=connexion">ici</a> pour vous connecter


</p>

<?php
}	
$content=ob_get_clean();
require('template.php')

?>
