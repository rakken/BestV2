<html>
	
	<?php 
		include("entete.php"); 
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
						<p>
					<?php
$user = $_POST['Username'];
$password = $_POST['Password'];
$ldaphost = 'FQDN';
$domain = 'xxxx.com';
$basedn = 'dc=xxxx,dc=xxxx';
$group = 'xxxxx';
$ldapport = '389';

$ad = ldap_connect($ldaphost, $ldapport) or die("Could not connect to $ldaphost");
 ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
 ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
 $cred = @ldap_bind($ad, "{$user}@{$domain}", $password);
 if(!$cred){
	  echo "The login or the password is invalid."; 
	  	 ?>
	 <script type="text/javascript"> 
						<!-- 
						var obj = 'window.location.replace("../login.php");'; 
						setTimeout(obj,2000); 
						// --> 
					</script>	 
	 
	 <?php
 }else{
 $userdn = getDN($ad, $user, $basedn);
 if (checkGroup($ad, $userdn, getDN($ad, $group, $basedn))) {
	 	 $_SESSION['userauth'] = getCN($userdn);
     echo "You're loged as ".$_SESSION['userauth'];
	 $_SESSION['loginOK']=true;
	 ?>
	 <script type="text/javascript"> 
						<!-- 
						var obj = 'window.location.replace("../index.php");'; 
						setTimeout(obj,2000); 
						// --> 
					</script>	 
	 
	 <?php
 } else {
     echo 'Sorry, you have not granted access to this page';
	 ?>
	 <script type="text/javascript"> 
						<!-- 
						var obj = 'window.location.replace("../index.php");'; 
						setTimeout(obj,2000); 
						// --> 
					</script>	 
	 
	 <?php
 } }
 ldap_unbind($ad);

/*
* This function searchs in LDAP tree ($ad -LDAP link identifier)
* entry specified by samaccountname and returns its DN or epmty
* string on failure.
*/
function getDN($ad, $samaccountname, $basedn) {
    $attributes = array('dn');
    $result = ldap_search($ad, $basedn,
        "(samaccountname={$samaccountname})", $attributes);
    if ($result === FALSE) { return ''; }
    $entries = ldap_get_entries($ad, $result);
    if ($entries['count']>0) { return $entries[0]['dn']; }
    else { return ''; };
}

/*
* This function retrieves and returns CN from given DN
*/
function getCN($dn) {
    preg_match('/[^,]*/', $dn, $matchs, PREG_OFFSET_CAPTURE, 3);
    return $matchs[0][0];
}

/*
* This function checks group membership of the user, searching only
* in specified group (not recursively).
*/
function checkGroup($ad, $userdn, $groupdn) {
    $attributes = array('members');
    $result = ldap_read($ad, $userdn, "(memberof={$groupdn})", $attributes);
    if ($result === FALSE) { return FALSE; };
    $entries = ldap_get_entries($ad, $result);
    return ($entries['count'] > 0);
}
?>	

					</p>					

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
