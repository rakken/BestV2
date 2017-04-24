<html>
	<?php include("entete.php"); ?>
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
						$reponse = $bdd->query("SELECT * FROM bestv2.server WHERE Standalone LIKE '%".$_POST['Standalone']."%'");
						
						// On affiche chaque entr?une ?ne
					?>
					<form action=".\seek2.php" method="post" onsubmit="return">
						<table class="table gauche">
							<tr>
								<td>The term to search in the site name *:
									<input type="text" name="Standalone"/>&nbsp;&nbsp;&nbsp;
									<input class="btn btn-primary" type="submit" name="envoyer" id="button" value="Validate"  /> 
								</td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</table>
					</form>
					<table class="table">
						<thead class="thead">
							<tr>
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
							while ($donnees = $reponse->fetch())
							{
							?>
							
							<tr>
								<td><?php echo $donnees['Standalone'];?></td>
								<td><?php echo $donnees['Description'];?></td>
								<td><a href="http://<?php echo $donnees['StandaloneDracIp'];?>"target="_blank"><?php echo $donnees['StandaloneDracIp'];?></a></td>
								<td><a href="http://<?php echo $donnees['Node1DracIp'];?>"target="_blank"><?php echo $donnees['Node1DracIp'];?></a></td>
								<td><a href="http://<?php echo $donnees['Node2DracIp'];?>"target="_blank"><?php echo $donnees['Node2DracIp'];?></a></td>
								<td><a href="http://<?php echo $donnees['AvamarMgmtIp'];?>"target="_blank"><?php echo $donnees['AvamarMgmtIp'];?></a></td>
							<td><a href="AvamarAdmin.php?AvamarIp=<?php echo $donnees['AvamarProdIp'];?>"target="_blank" download="<?php echo $donnees['Standalone'];?>"><?php echo $donnees['AvamarProdIp'];?></a></td>
								<td><a href="http://<?php echo $donnees['DdMgmtIp'];?>"target="_blank"><?php echo $donnees['DdMgmtIp'];?></a></td>
								<td><a href="http://<?php echo $donnees['DdProdIp'];?>"target="_blank"><?php echo $donnees['DdProdIp'];?></a></td>
								<td><a href="http://<?php echo $donnees['VNXe1Mgmt'];?>"target="_blank"><?php echo $donnees['VNXe1Mgmt'];?></a></td>
								<td><a href="http://<?php echo $donnees['VNXe2Mgmt'];?>"target="_blank"><?php echo $donnees['VNXe2Mgmt'];?></a></td>
							</tr>
							
							<?php	
							}												
							$reponse->closeCursor(); // Termine le traitement de la requete
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