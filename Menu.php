<!-- Le menu -->
<div class="container menu"> 

	<div class="col-mg-12">
		<img class="img-responsive banniere" src="../img/Richemont.png" alt="Richemont" />
	</div>
	<p align="right"><?php 
		if(isset($_SESSION['loginOK'])){
	echo "You're loged as " .$_SESSION['userauth']; ?></p>
	<?php 	} ?>
	<div class="row">
		<div class="col-mg-12">
			<div class="navbar navbar-default"> 
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a class="navbar-bold" href=".\index.php">Best V2 server list</a></li>
						<li><a href=".\ajout.php">Add a server</a></li>
						<li><a href=".\delete.php">Delete a server</a></li>
						<li><a href=".\Change.php">Change a server</a></li><?php if(isset($_SESSION['loginOK'])){ ?>
						<li><a href=".\indexOff.php">Logoff</a></li>
						<?php } ?>
						
					</ul>
				</div>
			</div>
		</div>				
	</div>	
</div>