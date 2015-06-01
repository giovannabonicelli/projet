<?php include("entete.php"); ?>

<form action ="cible_supprimer_club.php" method="post">
<div class="jumbotron">
<h1> <center>Supression de votre participation</center> </h1>
<br />
<p>

	Tapez votre nom :
	<input type="text" name="nom"/><br />

	Tapez votre prénom :
	<input type="text" name="prenom"/><br />
	Tapez votre INE :
	<input type="text" name="INE"/><br />
	
	Choisir le club où vous souhaitez ne plus participer : <br />
	<input type="checkbox" name="Dramateck" id="Dramateck" /><label for="Dramateck">Dramateck</label><br />
	<input type="checkbox" name="Musiteck" id="Musiteck" /><label for="Musiteck">Musiteck</label><br />
	<input type="checkbox" name="Polybeats" id="Polybeats" /><label for="Polybeats">Polybeats</label><br />
	<input type="checkbox" name="Polycook" id="Polycook" /><label for="Polycook">Polycook</label><br />
	<input type="checkbox" name="Polypix" id="Polypix" /><label for="Polypix">Polypix</label><br />
	<input type="checkbox" name="Polypop" id="Polypop" /><label for="Polypop">Polypop</label><br />
	<input type="checkbox" name="Polytimes" id="Polytimes" /><label for="Polytimes">Polytimes</label><br />
	<input type="submit" value="Valider" />
</p>
</div>
</form>

<?php include("pied_de_page.php"); ?>