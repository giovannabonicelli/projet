
<?php 
function afficher($table)
{
	include("BD.php"); 
	$reponse = $bdd->query("select nom, prenom, option, annee from participe, etudiant where etudiant.ine=participe.ine and nom_club='".$table."';");
	$tab = $reponse->fetchAll();
	?>
	<table border="3">
		<caption><h2 id="<?php echo $table?>"><?=$table ?></h2></caption>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Option</th>
			<th>Année</th>
		</tr>
		<tbody>
		<?php
			foreach($tab as $value){	
		?>			 
		<tr>
			<td><?php echo $value['nom']?></td>
			<td><?php echo $value['prenom'];?></td>
			<td><?php echo $value['option']?></td>
			<td><?php echo $value['annee']?></td>
		</tr><?php
			}?>
		</tbody>
	</table>
<?php 
}
?>