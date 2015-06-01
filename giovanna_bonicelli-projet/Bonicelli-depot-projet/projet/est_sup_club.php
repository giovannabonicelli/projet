<?php 
function est_sup($table, $nom_club)
{
	include("BD.php"); 
	$reponse = $bdd->query("select * from participe where ine='".$table."' and nom_club='".$nom_club."';");
	$count = $reponse->rowCount();
	if($count='0'){
		echo "La participation ".$nom_club." a été supprimé";
	}
	else{
		echo "L'étudiant n'existe pas ou le formulaire a été mal rempli";
	}
};
?>