<?php include("entete.php"); ?>
<?php include("BD.php"); ?>
<?php
if (isset($_POST['INE']) AND isset($_POST['nom'])AND isset($_POST['prenom']) )
{
	try
	{	
		if (isset($_POST['semaine-des-clubs'])) { 
			$participe=$bdd->query("DELETE FROM coopere WHERE ine='".$_POST['INE']."' AND numero_ev=1;");
		} 
		if (isset($_POST['Telethon'])) {
			$participe=$bdd->query("DELETE FROM coopere WHERE ine='".$_POST['INE']."' AND numero_ev=2;");
		} 
		if (isset($_POST['spectacle-de-noël'])) {
			$participe=$bdd->query("DELETE FROM coopere WHERE ine='".$_POST['INE']."' AND numero_ev=3;");
		} 
		if (isset($_POST['festival-de-musique'])) {
			$participe=$bdd->query("DELETE FROM coopere WHERE ine='".$_POST['INE']."' AND numero_ev=4;");
		} 
		if (isset($_POST['defistop'])) {
			$participe=$bdd->query("DELETE FROM coopere WHERE ine='".$_POST['INE']."' AND numero_ev=5;");
		} 
		if (isset($_POST['spectacle-final'])) {
			$participe=$bdd->query("DELETE FROM coopere WHERE ine='".$_POST['INE']."' AND numero_ev=6;");
		};
	
		echo "Vous ne participez plus à ce(s) évènement(s)";
	}	
	catch(Exception $e)
	{
	echo 'Erreur dans l\'écriture du message. Veuillez vérifier les champs.' ;
	}
}
?> 
<p>Pour retourner à la page de suppression , <a href="supprimerev.php">clique ici</a></p>
<?php include("pied_de_page.php"); ?>