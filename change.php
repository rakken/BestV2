<html>
	<?php include("entete.php"); 
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
						$reponse = $bdd->query('SELECT * FROM bestv2.server ORDER BY Standalone');
					?>
					
					
					<table class="table">
						<thead class="thead">
							<tr>
								<th></th> 
							<th>Site Name</th> 	
							<th>Description</th>
							<th>Standalone Drac Ip</th>
							<th>Node 1 Drac Ip</th>
							<th>Node 2 Drac Ip</th> 
							<th>Avamar Management Ip</th>
							<th>Avamar Prod Ip</th> 
							<th>Data Domain Management Ip</th>
							<th>Data Domain Prod Ip</th>
							<th>VNXe 1 Management</th>
							<th>VNXe 2 Management</th>
							</tr>
							
						</thead>
						
						
						<?php
							// On affiche chaque entr?une ?ne
							while ($donnees = $reponse->fetch())
							{
							?>
							<tr>
								<td><a href="change2.php?Standalone=<?php echo $donnees['Standalone'];?>">Change</a></td>
								<td><?php echo $donnees['Standalone'];?></td>
								<td><?php echo $donnees['Description'];?></td>
								<td><?php echo $donnees['StandaloneDracIp'];?></td>
								<td><?php echo $donnees['Node1DracIp'];?></td>
								<td><?php echo $donnees['Node2DracIp'];?></td>
								<td><?php echo $donnees['AvamarMgmtIp'];?></td>
								<td><?php echo $donnees['AvamarProdIp'];?></td>
								<td><?php echo $donnees['DdMgmtIp'];?></td>
								<td><?php echo $donnees['DdProdIp'];?></td>
								<td><?php echo $donnees['VNXe1Mgmt'];?></td>
								<td><?php echo $donnees['VNXe2Mgmt'];?></td>
							</tr>
							<?php	
							}												
							$reponse->closeCursor(); // Termine le traitement de la requ?
							
						?>
					</table>	
				</div>
			</div>
			<div class="row">
				<div class="col-mg-12 footer">
					
					<!-- le pied de page -->
					<?php include("pied_de_page.php"); ?>
					
				</div>
			</div>
		</div>	
	</body>
</html>