<?php include("entete.php"); ?>
<?php include("BD.php"); ?>
<?php include("est_sup_club.php"); ?>
<?php
if (isset($_POST['INE']) AND isset($_POST['nom'])AND isset($_POST['prenom']) )
{
	try
	{		
		if (isset($_POST['Dramateck'])) { 
			$participe=$bdd->query("DELETE FROM participe WHERE nom_club='Dramateck' AND ine='".$_POST['INE']."';");
			est_sup($_POST['INE'],'Dramateck');
		} 
		if (isset($_POST['Musiteck'])) {
			$participe=$bdd->query("DELETE FROM participe WHERE nom_club='Musiteck' AND ine='".$_POST['INE']."';");
			est_sup($_POST['INE'],'Musiteck');
		} 
		if (isset($_POST['Polybeats'])) {
			$participe=$bdd->query("DELETE FROM participe WHERE nom_club='Polybeats' AND ine='".$_POST['INE']."';");
			est_sup($_POST['INE'],'Polybeats');
		} 
		if (isset($_POST['Polycook'])) {
			$participe=$bdd->query("DELETE FROM participe WHERE nom_club='Polycook' AND ine='".$_POST['INE']."';");
			est_sup($_POST['INE'],'Polycook');
		} 
		if (isset($_POST['Polypix'])) {
			$participe=$bdd->query("DELETE FROM participe WHERE nom_club='Polypix' AND ine='".$_POST['INE']."';");
			est_sup($_POST['INE'],'Polypix');
		} 
		if (isset($_POST['Polypop'])) {
			$participe=$bdd->query("DELETE FROM participe WHERE nom_club='Polypop' AND ine='".$_POST['INE']."';");
			est_sup($_POST['INE'],'Polypop');
		} 
		if (isset($_POST['Polytimes'])) {
			$participe=$bdd->query("DELETE FROM participe WHERE nom_club='Polytimes' AND ine='".$_POST['INE']."';");
			est_sup($_POST['INE'],'Polytimes');
		}; 
		
	}
	catch(Exception $e)
	{
	echo 'Erreur dans l\'écriture du message. Veuillez vérifier les champs.';
	}
}
?> 
<p>Pour retourner à la page de suppression , <a href="cible_supprimer_club.php">clique ici</a></p>
<?php include("pied_de_page.php"); ?>