function verifVide(champ)
{
	if(champ.value.length < 1)
	{
		surligne(champ, true);
		return false;
	}
	else
	{
		surligne(champ, false);
		return true;
	}
}
function verifGrand(champ)
{
	if(champ.value.length > 200)
	{
		surligne(champ, true);
		return false;
	}
	else
	{
		surligne(champ, false);
		return true;
	}
}
function surligne(champ, erreur)
{
	if(erreur)
	champ.style.backgroundColor = "#5F8EBD";
	else
	champ.style.backgroundColor = "";
}
function ValidateIPaddress(ipaddress)   
{  
	var ipformat = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;  
	if (ipaddress.value.match(ipformat))  
	{  
		surligne(ipaddress, false);
		return true;  
	}else if (ipaddress.value.length < 1 )
	{
		surligne(ipaddress, false);
		return true;
	} else
	{
		surligne(ipaddress, true);
		return false;
	}
} 



function verifForm(f)
{
	var videOk = verifVide(f.Standalone);
	var grandOk = verifGrand(f.Description);
	var ipStandaloneDracIp = ValidateIPaddress(f.StandaloneDracIp);
	var ipNode1DracIp = ValidateIPaddress(f.Node1DracIp);
	var ipNode2DracIp = ValidateIPaddress(f.Node2DracIp);
	var ipAvamarMgmtIp = ValidateIPaddress(f.AvamarMgmtIp);
	var ipAvamarProdIp = ValidateIPaddress(f.AvamarProdIp);
	var ipDdMgmtIp = ValidateIPaddress(f.DdMgmtIp);
	var ipDdProdIp = ValidateIPaddress(f.DdProdIp);
	var ipVNXe1Mgmt = ValidateIPaddress(f.VNXe1Mgmt);
	var ipVNXe2Mgmt = ValidateIPaddress(f.VNXe2Mgmt);
		
	
	if(videOk && grandOk && ipStandaloneDracIp && ipNode1DracIp && ipNode2DracIp && ipAvamarMgmtIp && ipAvamarProdIp && ipDdMgmtIp && ipDdProdIp && ipVNXe1Mgmt && ipVNXe2Mgmt){
		return true;
		}else if(!videOk){
		alert("The site name can't be empty.");
		return false;
		}else if (!grandOk){
		alert("The description cannot exceed 200 characters.");
		return false;
	}else
	{
		alert("An IP address is not correct.");
		return false;
	}
}

function verifFormCo(f){
	var videUser = verifVide(f.Username);
	var videPass = verifVide(f.Password);
		
	if(videUser && videPass){
		return true;
		}else if(!videUser){
		alert("The user name can't be empty.");
		return false;
		}else {
		alert("The password can't be empty.");
		return false;
	}
}