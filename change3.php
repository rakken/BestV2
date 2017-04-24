<html>
	<?php include("entete.php");
include("secure.php") ?>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-mg-8">
					<?php include("menu.php"); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-mg-8 contenu">
					<?php
						include("connect.php"); 
					?>
					
					<?php 
						$StandaloneSource  = $_GET["Standalone"] ;
						
						$req = $bdd->prepare('UPDATE `bestv2`.`server` SET `Standalone`=:Standalone, `Description`=:Description, `StandaloneDracIp`=:StandaloneDracIp, `Node1DracIp`=:Node1DracIp, `Node2DracIp`=:Node2DracIp, `AvamarMgmtIp`=:AvamarMgmtIp, `AvamarProdIp`=:AvamarProdIp, `DdMgmtIp`=:DdMgmtIp, `DdProdIp`=:DdProdIp, `VNXe1Mgmt`=:VNXe1Mgmt, `VNXe2Mgmt`=:VNXe2Mgmt WHERE `Standalone`=:StandaloneSource');
						$req->execute(array(
						'StandaloneSource' => $StandaloneSource,
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
						
						echo 'The server has been change!';
					?>
					<p>
						
						<?php	
							echo 'You will be redirected to the change page.';
							
						?>
					</p>
					<script type="text/javascript"> 
						<!-- 
						var obj = 'window.location.replace("../change.php");'; 
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
