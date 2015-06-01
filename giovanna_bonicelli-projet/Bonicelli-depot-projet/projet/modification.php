<?php include("entete.php"); ?>

<form action ="cible_modification.php" method="post">
<div class="jumbotron">
<h1> <center>Modification identité</center> </h1>
<br />
<p>

	Tapez le nom à modifier:
	<input type="text" name="nom-old"/><br />

	Tapez le prénom à modifier :
	<input type="text" name="prenom-old"/><br />
	Tapez le numéro INE à modifier:
	<input type="text" name="INE"/><br /><br />
	
	Tapez le nouveau nom:
	<input type="text" name="nom-new"/><br />

	Tapez le nouveau prénom :
	<input type="text" name="prenom-new"/><br />

	
	Selectionnez votre option :
	<select name="option">
		<option value="ENR">ENR</option>
		<option value="IG">IG</option>
		<option value="MAT">MAT</option>
		<option value="MI">MI</option>
		<option value="MEA">MEA</option>
		<option value="STE">STE</option>
		<option value="STIA">STIA</option>
		<option value="MSI">MSI</option>
		<option value="EGC">EGC</option>
		<option value="SE">SE</option>
	</select><br />
	Selectionnez votre année :
	<select name="année">
		<option value="3">3A</option>
		<option value="4">4A</option>
		<option value="5">5A</option>
	</select><br />

	<input type="submit" value="Valider" />
</p>
</div>
</form>

<?php include("pied_de_page.php"); ?>