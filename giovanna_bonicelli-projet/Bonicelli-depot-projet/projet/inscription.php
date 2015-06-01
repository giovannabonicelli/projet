<?php include("entete.php"); ?>

<form action ="cible.php" method="post">
<div class="jumbotron">
<h1> <center>Inscription aux clubs</center> </h1>
<br />
<p>

	Tapez votre nom :
	<input type="text" name="nom"/><br />

	Tapez votre prénom :
	<input type="text" name="prenom"/><br />
	Tapez votre INE :
	<input type="text" name="INE"/><br />
	
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