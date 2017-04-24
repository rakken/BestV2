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
					
					<p>You must be logged in to access to this page</p>
					<form action=".\login2.php" method="post" onsubmit="return verifFormCo(this)">
						<table class="table gauche">
							<tr>
								<td>Your account on RCCAD Domain</td> 
								<td>
									<input type="text" name="Username" onblur="verifVide(this)" />
								</td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td>Enter password for RCCAD Domain</td> 
								<td>
									<input type="password" name="Password" onblur="verifVide(this)" />
								</td>
								<td class="Tdlarge"></td>
							</tr>
							<tr>
								<td colspan="2" class="tdValide"><input class="btn btn-primary" type="submit" name="envoyer" id="button" value="Validate"/> 
								</td>
								<td class="Tdlarge"></td>
							</tr>
						</table>
					</form>
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
