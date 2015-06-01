<?php include("entete.php"); ?>
<?php include("BD.php"); ?>
<?php
if (isset($_POST['INE']) AND isset($_POST['option']) AND isset($_POST['année']) AND isset($_POST['nom'])AND isset($_POST['prenom']) )
{
	try
	{	
		$etud=$bdd->query("INSERT INTO etudiant(ine, option, annee, nom, prenom) VALUES('".$_POST['INE']."', '".$_POST['option']."', ".$_POST['année'].", '".$_POST['nom']."', '".$_POST['prenom']."')");
		
		if (isset($_POST['Dramateck'])) { 
			$participe=$bdd->query("INSERT INTO participe(ine, nom_club) VALUES('".$_POST['INE']."','Dramateck')");
		} 
		if (isset($_POST['Musiteck'])) {
			$participe=$bdd->query("INSERT INTO participe(ine, nom_club) VALUES('".$_POST['INE']."','Musiteck')");
		} 
		if (isset($_POST['Polybeats'])) {
			$participe=$bdd->query("INSERT INTO participe(ine, nom_club) VALUES('".$_POST['INE']."','Polybeats')");
		} 
		if (isset($_POST['Polycook'])) {
			$participe=$bdd->query("INSERT INTO participe(ine, nom_club) VALUES('".$_POST['INE']."','Polycook')");
		} 
		if (isset($_POST['Polypix'])) {
			$participe=$bdd->query("INSERT INTO participe(ine, nom_club) VALUES('".$_POST['INE']."','Polypix')");
		} 
		if (isset($_POST['Polypop'])) {
			$participe=$bdd->query("INSERT INTO participe(ine, nom_club) VALUES('".$_POST['INE']."','Polypop')");
		} 
		if (isset($_POST['Polytimes'])) {
			$participe=$bdd->query("INSERT INTO participe(ine, nom_club) VALUES('".$_POST['INE']."','Polytimes')");
		}; 
		$insertion=$bdd->query("SELECT * FROM etudiant WHERE ine='".$_POST['INE']."' AND nom='".$_POST['nom']."' AND prenom='".$_POST['prenom']."';");
		$count = $insertion ->rowCount();
		if ($count='1'){
			echo "Les clubs sont validés";
		}
		else {
			echo "Vous avez mal rempli le formulaire";
		}
	}
	catch(Exception $e)
	{
	echo 'Erreur dans l\'écriture du message. Veuillez vérifier les champs.';
	}
}
?> 
<p>Pour retourner à la page d'accueil , <a href="index.php">clique ici</a></p>
<?php include("pied_de_page.php"); ?>