<html>
	<?php 
		include("entete.php"); 
		include("secure.php")
	?>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-mg-12">
					<?php include("menu.php"); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-mg-12 contenu">
					<?php
						include("connect.php"); 						
						// Vérification si le serveur existe déjà
						$Standalone = $_POST['Standalone'];
						$req = $bdd->prepare("SELECT Standalone FROM `bestv2`.`server` where Standalone= :Standalone");
						$req->execute(array('Standalone' => $Standalone,));
						
						$resultat = $req->fetch();
						
						if (!$resultat)
						{							
							echo "the server dosn't exist!";
						}
						else
						{
							$reqDel = $bdd->prepare('DELETE FROM server WHERE Standalone=?');
							$reqDel->execute(array($_POST['Standalone']));
							echo 'The server has been clear!';
						}
					?>
					<p>
						<?php	
							echo 'You will be redirected to the delete page.';
							
						?>
					</p>					
					<script type="text/javascript"> 
						<!-- 
						var obj = 'window.location.replace("../delete.php");'; 
						setTimeout(obj,2000); 
						// --> 
					</script>
				</div>
			</div>
			<div class="row">
				<div class="col-mg-12 footer">
					
					<!-- le pied de page -->
					<?php 
						include("pied_de_page.php"); 
					?>
				</div>
			</div>
		</div>
	</body>
</html>						