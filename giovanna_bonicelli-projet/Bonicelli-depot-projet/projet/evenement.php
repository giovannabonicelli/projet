<?php include("entete.php"); ?>
<?php include("BD.php"); ?>
<?php include("afficherev.php"); ?>

<form method="post" action="rechercherev.php">
	 
	<p>
		Rechercher une personne <br />
		Tapez le nom :
		<input type="text" name="nom"/><br />

		Tapez le prénom :
		<input type="text" name="prenom"/><br />
		
		<input type="submit" value="Valider" />

	</p>

</form>
<br />
<h1>Les évènements</h1>
<?php
$reponse = $bdd->query('select * from evenement');
$tab = $reponse->fetchAll();
foreach($tab as $value){?>	
	<a href="#<?php echo $value['nom_ev'] ;?>">
		<?php echo $value['nom_ev'] ;?>
	</a>
	<?php
	echo 'à '.$value['heure'].' le '.$value['date'].' à '.$value['lieu'].'<br />';
}
?>
<?php
$reponse = $bdd->query('select * from evenement');
$tab = $reponse->fetchAll();
foreach($tab as $value){
	afficher($value['nom_ev']);
}
?>
	

<?php include("pied_de_page.php"); ?>