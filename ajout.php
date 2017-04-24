<html>
	<?php include("entete.php");
								include("secure.php");
?>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-mg-12">
					<?php 
					include("menu.php"); 
?>
				</div>

			</div>

			<div class="row">
				<div class="col-mg-12 contenu">
					  
					<p>Please fill out the following fields to add a new server :</p>
					<form action=".\envoi.php" method="post" onsubmit="return verifForm(this)">
						<table class="table gauche">
							
							
							<tr>
								<td>Site Name *:</td> 
								<td>
									<input type="text" name="Standalone" onblur="verifVide(this)" />
								</td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>Description :</td> 
								<td>
									<textarea type="text" name="Description" onblur="verifGrand(this)" rows="5" cols="22">
									</textarea>
								</td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>Standalone Drac Ip : </td><td><input type="text" name="StandaloneDracIp" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>Node 1 Drac Ip :</td> <td><input type="text" name="Node1DracIp" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>Node 2 Drac Ip :</td> <td><input type="text" name="Node2DracIp" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>Avamar Management Ip :</td> 
								<td><input type="text" name="AvamarMgmtIp" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>Avamar Prod Ip :</td> <td><input type="text" name="AvamarProdIp" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>Data Domain Management Ip :</td> <td><input type="text" name="DdMgmtIp" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>Data Domain Prod Ip :</td> <td><input type="text" name="DdProdIp" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>VNXe 1 Management :</td> 
								<td><input type="text" name="VNXe1Mgmt" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>VNXe 2 Management :</td> <td><input type="text" name="VNXe2Mgmt" onblur="ValidateIPaddress(this)"/></td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td colspan="2" class="tdValide"><input class="btn btn-primary" type="submit" name="envoyer" id="button" value="Validate"/> 
								</td>
								<td class="Tdlarge"></td>
							</tr>
						</table>
					</form>
					The fields marked with a * are mandatory!
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
