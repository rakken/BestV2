<!-- Le pied de page -->

<footer id="pied_de_page">
	<div class="bande_horizontale"></div>
	<p>Richemont</p>
	<?php
						include("connect.php"); 
		// Fonction qui permet de mettre à jour le compteur de visites
		
		
		
		// On prépare les données à insérer
		$ip   = $_SERVER['REMOTE_ADDR']; // L'adresse IP du visiteur
		$date = date('Y-m-d');           // La date d'aujourd'hui, sous la forme AAAA-MM-JJ
		
		// Mise à jour de la base de données
		// 1. On initialise la requête préparée
		$query = $bdd->prepare("INSERT INTO `bestv2`.`stats_visites` (ip , date_visite , pages_vues) VALUES (:ip ,:date,1) ON DUPLICATE KEY UPDATE pages_vues = pages_vues + 1");
		// 2. On execute la requête préparée avec nos paramètres
		
		$query->execute(array(
        ':ip'   => $ip,
        ':date' => $date
		));
		$query->closeCursor(); // Termine le traitement de la recu?
	?>
	
</footer>