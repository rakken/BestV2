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
						$StandaloneSource  = $_GET["Standalone"] ;
						$reponse = $bdd->prepare('SELECT * FROM bestv2.server WHERE Standalone=:Standalone');
						$reponse->execute(array(
						'Standalone' => $StandaloneSource,));
						// On affiche chaque entrꥠune ࡵne
						while ($donnees = $reponse->fetch())
						{
						?>
						
						<form action=".\change3.php?Standalone=<?php echo $donnees['Standalone'];?>" method="post" onsubmit="return verifForm(this)">
							<table class="table gauche">
								
								<tr>
									<td>Site Name :</td> 
									<td><input type="text" name="Standalone" onblur="verifVide(this)" value="<?php echo $donnees['Standalone'];?>"/></td>
									<td class="Tdlarge"></td>
								</tr>
								<tr>
									<td>Description :</td> 
									<td><textarea type="text" name="Description" onblur="verifGrand(this)" value="<?php echo $donnees['Description'];?>" rows="5" cols="22"></textarea></td>
									<td class="Tdlarge"></td>
								</tr>
								<tr>
									<td>Standalone Drac Ip : </td><td><input type="text" name="StandaloneDracIp" value="<?php echo $donnees['StandaloneDracIp'];?>" onblur="ValidateIPaddress(this)"/></td>
									<td class="Tdlarge"></td>
								</tr>
								<tr>
									<td>Node 1 Drac Ip :</td> <td><input type="text" name="Node1DracIp" value="<?php echo $donnees['Node1DracIp'];?>" onblur="ValidateIPaddress(this)"/></td>
									<td class="Tdlarge"></td>
								</tr>
								<tr>
									<td>Node 2 Drac Ip :</td> <td><input type="text" name="Node2DracIp" value="<?php echo $donnees['Node2DracIp'];?>" onblur="ValidateIPaddress(this)"/></td>
									<td class="Tdlarge"></td>
								</tr>
								<tr>
								<td>Avamar Management Ip :</td> <td><input type="text" name="AvamarMgmtIp" value="<?php echo $donnees['AvamarMgmtIp'];?>" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
								</tr>
								<tr>
								<td>Avamar Prod Ip :</td> <td><input type="text" name="AvamarProdIp" value="<?php echo $donnees['AvamarProdIp'];?>" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
								</tr>
								<tr>
								<td>Data Domain Management Ip :</td> <td><input type="text" name="DdMgmtIp" value="<?php echo $donnees['DdMgmtIp'];?>" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
								</tr>
								<tr>
								<td>Data Domain Prod Ip :</td> <td><input type="text" name="DdProdIp" value="<?php echo $donnees['DdProdIp'];?>" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
								</tr>
								<tr>
								<td>VNXe 1 Management :</td> <td><input type="text" name="VNXe1Mgmt" value="<?php echo $donnees['VNXe1Mgmt'];?>" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
								</tr>
								<tr>
								<td>VNXe 2 Management :</td> <td><input type="text" name="VNXe2Mgmt" value="<?php echo $donnees['VNXe2Mgmt'];?>" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
								</tr>
								<tr>
								<td colspan="2" class="tdValide"><input class="btn btn-primary" type="submit" name="envoyer" id="button" value="Validate"/> 
								</td>
								<td class="Tdlarge"></td>
								</tr>
								
								</table>
								</form>
								
								<?php	
								}												
								$reponse->closeCursor(); // Termine le traitement de la requ뵥
								?>
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
								
								
																