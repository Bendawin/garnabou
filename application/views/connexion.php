<!-- PAGE TERMINE -->

<?php
	include 'include/head_connexion.php';
?>
<!--  CONTENU DE LA PAGE -->

	<!-- TEXTE AVANT FORMULAIRE -->
		<h2>Bienvenue sur GSB Services Compte-Rendu !</h2>
		<p> Veuillez vous identifier afin d'accéder au service. </p>
		
	
	<!--  FORUMULAIRE DE CONNEXION -->
	
		<form action="connexion.php" method="post">
			Identifiant: <input type="text" name="indentifiant" value="" />
			Date d'embauche: <input type="password" name="mot_de_passe" value="" />
			<input type="submit" name="connexion" value="Connexion" />
		</form>


<!-- FIN CONTENU PAGE -->
<?php 
	include 'include/footer.php';	
?>
