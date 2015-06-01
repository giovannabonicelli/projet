<?php include("entete.php"); ?>
<?php include("BD.php"); ?>
<?php
if (isset($_POST['nom'])AND isset($_POST['prenom']) )
{
	try
	{
		$etud=$bdd->query("SELECT nom, prenom, nom_club FROM etudiant, participe WHERE etudiant.ine=participe.ine AND nom='".$_POST['nom']."' AND prenom='".$_POST['prenom']."';");
		$count=$etud ->rowCount();
		if ($count>='1'){
			$tab = $etud->fetchAll();
			echo htmlspecialchars($_POST['nom'].' '.$_POST['prenom'].' :').'<br />';
			foreach($tab as $value){
				echo ($value['nom_club'].'<br />') ;
			}
		}
		else {
			echo "le formulaire n'a pas était bien rempli ou l'étudiant ne coopere pas d'évènement";
		}
	}
	catch(Exception $e)
	{
	echo 'Erreur dans l\'écriture du nom ou du prenom ou c\'est une personne qui n\'est pas inscrite. Veuillez vérifier les champs.';
	}
}
?> 
<p>Pour retourner à la page des clubs, <a href="club.php">clique ici</a></p>
<?php include("pied_de_page.php"); ?>



