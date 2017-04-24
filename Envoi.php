<html>
	
	<?php 
		include("entete.php"); 
		include("secure.php")
	?>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-mg-8">
					<?php 
						include("menu.php"); 
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-mg-8 contenu">
					<?php
						include("connect.php"); 
					?>
					
					<?php 
						
						// Vérification si le serveur existe déjà
						$Standalone = $_POST['Standalone'];
						$req = $bdd->prepare("SELECT Standalone FROM `bestv2`.`server` where Standalone= :Standalone");
						$req->execute(array(
						'Standalone' => $Standalone,));
						
						$resultat = $req->fetch();
						
						if (!$resultat)
						{
							$req = $bdd->prepare('INSERT INTO `bestv2`.`server`(Standalone, Description, StandaloneDracIp, Node1DracIp, Node2DracIp, AvamarMgmtIp, AvamarProdIp, DdMgmtIp, DdProdIp, VNXe1Mgmt, VNXe2Mgmt) VALUES(:Standalone, :Description, :StandaloneDracIp, :Node1DracIp, :Node2DracIp, :AvamarMgmtIp, :AvamarProdIp, :DdMgmtIp, :DdProdIp, :VNXe1Mgmt, :VNXe2Mgmt)');
							$req->execute(array(
							'Standalone' => $_POST['Standalone'],
							'Description' => $_POST['Description'],
							'StandaloneDracIp' => $_POST['StandaloneDracIp'],
							'Node1DracIp' => $_POST['Node1DracIp'],
							'Node2DracIp' => $_POST['Node2DracIp'],
							'AvamarMgmtIp' => $_POST['AvamarMgmtIp'],
							'AvamarProdIp' => $_POST['AvamarProdIp'],
							'DdMgmtIp' => $_POST['DdMgmtIp'],
							'DdProdIp' => $_POST['DdProdIp'],
							'VNXe1Mgmt' => $_POST['VNXe1Mgmt'],
							'VNXe2Mgmt' => $_POST['VNXe2Mgmt']
							));
							
							echo 'the server has been added!';
						}
						else
						{
							echo 'A server with this Standalone already exists!';
						}
					?>
					<p>
						<?php	
							echo 'You will be redirected to the delete page.';
							
						?>
					</p>					
					<script type="text/javascript"> 
						<!-- 
						var obj = 'window.location.replace("../ajout.php");'; 
						setTimeout(obj,2000); 
						// --> 
					</script>
				</div>
			</div>
			<div class="row">
				<div class="col-mg-8 footer">
					<!-- le pied de page -->
					<?php include("pied_de_page.php"); ?>
					
				</div>
			</div>	
		</div>
	</body>
</html>
