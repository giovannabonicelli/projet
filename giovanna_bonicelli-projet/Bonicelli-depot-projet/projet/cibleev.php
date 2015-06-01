<?php include("entete.php"); ?>
<?php include("BD.php"); ?>
<?php
if (isset($_POST['INE']))
{
	try
	{	
		$insertion=$bdd->query("SELECT * FROM etudiant WHERE ine='".$_POST['INE']."' AND nom='".$_POST['nom']."' AND prenom='".$_POST['prenom']."';");
		$count = $insertion ->rowCount();
		$trigger=$bdd->query("SELECT * FROM participe WHERE ine='".$_POST['INE']."';");
		$ctri = $trigger ->rowCount();
		if (($count='1') AND($ctri>='1')){
			if (isset($_POST['semaine-des-clubs'])) { 
				$participe=$bdd->query("INSERT INTO coopere(ine, numero_ev) VALUES('".$_POST['INE']."',1)");
			} 
			if (isset($_POST['Telethon'])) {
				$participe=$bdd->query("INSERT INTO coopere(ine, numero_ev) VALUES('".$_POST['INE']."',2)");
			} 
			if (isset($_POST['spectacle-de-noël'])) {
				$participe=$bdd->query("INSERT INTO coopere(ine, numero_ev) VALUES('".$_POST['INE']."',3)");
			} 
			if (isset($_POST['festival-de-musique'])) {
				$participe=$bdd->query("INSERT INTO coopere(ine, numero_ev) VALUES('".$_POST['INE']."',4)");
			} 
			if (isset($_POST['defistop'])) {
				$participe=$bdd->query("INSERT INTO coopere(ine, numero_ev) VALUES('".$_POST['INE']."',5)");
			} 
			if (isset($_POST['spectacle-final'])) {
				$participe=$bdd->query("INSERT INTO coopere(ine, numero_ev) VALUES('".$_POST['INE']."',6)");
			};
			echo 'évènements validés';
		}
		else {
		echo 'Vous avez mal rempli le formulaire ou cet étudiant n\'est pas inscrit dans un club';
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