<?php include("entete.php"); ?>
<?php include("BD.php"); ?>
<?php


if (isset($_POST['INE']) AND isset($_POST['option']) AND isset($_POST['année']) AND isset($_POST['nom-new'])  AND isset($_POST['nom-old']) AND isset($_POST['prenom-new']) AND isset($_POST['prenom-old']) ) 
{
	try
	{
		$etud=$bdd->query("UPDATE etudiant SET option='".$_POST['option']."', annee=".$_POST['année'].", nom='".$_POST['nom-new']."', prenom='".$_POST['prenom-new']."' WHERE ine='".$_POST['INE']."';");
		$insertion=$bdd->query("SELECT * FROM etudiant WHERE ine='".$_POST['INE']."' AND nom='".$_POST['nom-new']."' AND prenom='".$_POST['prenom-new']."';");
		$count = $insertion ->rowCount();
		if ($count=='1'){
			$res=$bdd->query("SELECT * FROM etudiant WHERE ine='".$_POST['INE']."';");	
			echo $res['nom'];
			echo $res['prenom'];
			echo $res['option'];
			echo $res['annee'];
			
			}
		}
		else {
			echo 'Le numero INE que vous avez tapez n\'existe pas';
		}
	}
	catch(Exception $e)
	{
	echo 'Erreur dans l\'écriture du message. Veuillez vérifier les champs.';
	}
}

?> 
<p>
<p>Pour retourner à la page d'accueil , <a href="index.php">clique ici</a></p>
<?php include("pied_de_page.php"); ?>