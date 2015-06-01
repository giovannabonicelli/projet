<?php include("entete.php"); ?>
<?php include("BD.php"); ?>
<?php include("afficher.php"); ?>

<form method="post" action="rechercher.php">
	 
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
<h1>Les clubs</h1>
<?php
$reponse = $bdd->query('select * from club');
$tab = $reponse->fetchAll();
foreach($tab as $value){?>	
	<a href="#<?php echo $value['nom_club'] ;?>">
		<?php echo $value['nom_club'].'<br />' ;?>
	</a>
	<?php
}
?>
<?php
$reponse = $bdd->query('select * from club');
$tab = $reponse->fetchAll();
foreach($tab as $value){
	afficher($value['nom_club']);
}
?>
	

<?php include("pied_de_page.php"); ?>