<?php include("entete.php"); ?>

<form action ="cibleev.php" method="post">
<div class="jumbotron">
<h1> <center>Inscription aux évènement</center> </h1>
<br />
<p>


	Tapez votre nom :
	<input type="text" name="nom"/><br />

	Tapez votre prénom :
	<input type="text" name="prenom"/><br /> 
	
	Tapez votre INE :
	<input type="text" name="INE"/><br />

	<input type="checkbox" name="semaine-des-clubs" id="semaine-des-clubs" /><label for="semaine-des-clubs">La semaine des clubs</label><br />
	<input type="checkbox" name="Telethon" id="Telethon" /><label for="Telethon">Téléthon</label><br />
	<input type="checkbox" name="spectacle-de-noël" id="spectacle-de-noël" /><label for="spectacle-de-noël">Le spectacle de noël</label><br />
	<input type="checkbox" name="festival-de-musique" id="festival-de-musique" /><label for="festival-de-musique">Le festival de musique</label><br />
	<input type="checkbox" name="defistop" id="defistop" /><label for="defistop">Le défistop</label><br />
	<input type="checkbox" name="spectacle-final" id="spectacle-final" /><label for="spectacle-final">Le spectacle final</label><br />
	<input type="submit" value="Valider" />
</p>
</div>
</form>

<?php include("pied_de_page.php"); ?>