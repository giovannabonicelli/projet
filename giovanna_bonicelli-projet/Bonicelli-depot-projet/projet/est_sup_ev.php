<?php 
function est_sup($table, $num_ev)
{
	include("BD.php"); 
	$reponse = $bdd->query("select * from coopere where ine='".$table."' and numero_ev=".$num_ev.";");
	$count = $reponse->rowCount();
	if($count='0'){
		echo "La participation a été supprimé";
	}
	else{
		echo "L'étudiant n'existe pas ou le formulaire a été mal rempli";
	}
	
?>