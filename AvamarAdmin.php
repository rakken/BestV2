<?php
	header ("Content-Type: application/x-java-jnlp-file"); 
	$AvamarIp  = $_GET["AvamarIp"] ;
?>
<jnlp 
spec="1.0+"
codebase="http://<?php echo $AvamarIp;?>/mc" >
	
    <!--
		Note: codebase = /var/www/html/mc
	-->
	
    <!--
		1. codebase = /var/www/html/mc
		Removed the href jnlp element attribute (One trick is to make sure
		not to include the href attribute in the JNLP file that your servlet
		sends back to Web Start. This will tell Web Start to disable the
		update check on JNLP files, and Web Start will not treat each new JNLP
		file as an application update - only updated jar files will.)
		href="mc/mcgui.jnlp"
	-->
	
    <information>
        <title>Avamar Administrator</title>
        <vendor>EMC Corporation</vendor>
        <homepage href="http://www.avamar.com/" />
		
        <description>Avamar Administrator</description>
        <description kind="short">Avamar Administrator</description>
        <description kind="tooltip">
			<f:verbatim>
				(7.1.1)
			</f:verbatim>
		</description>
        <offline-allowed />
	</information>
	
    <!--
		Native libraries must have unrestricted access.  
	-->
    <security>
        <all-permissions />
	</security>
	
    <resources>
        <j2se version="1.6+" java-vm-args="-Xmx512m" href="http://java.sun.com/products/autodl/j2se" />
        <jar href="lib/mcclient.jar" />
        <jar href="lib/ansir_tristate.jar" />
        <jar href="lib/images.jar" />
        <jar href="lib/rmi_ssl_keystore.jar" />
        <jar href="lib/asn_client.jar" />
        <jar href="lib/avamar_mdate.jar"/>
        <jar href="lib/AxionAdministratorOLH.jar"/>
        <jar href="lib/jgraph.jar"/>
        <jar href="lib/mail.jar"/>
        <jar href="lib/xercesImpl.jar"/>
		
        
		<jar href="lib/jfreechart-1.0.14.jar"/>
		<jar href="lib/jcommon-1.0.17.jar"/>
		
		
		
		<jar href="lib/TableLayout-bin-jdk1.5-2007-04-21.jar"/>
		
		<jar href="lib/mccommons.jar"/>
		<jar href="lib/jh.jar" />
		
		<jar href="lib/org-netbeans-swing-outline.jar"/>
		
		
	</resources>
	
    <application-desc main-class="com.avamar.mc.gui.console.LoginDialog">
		<argument>-mcsuserid</argument>
		<argument>MCUser</argument>
		<argument>-mcsaddr</argument>
		<argument><?php echo $AvamarIp;?></argument>
		<argument>-domain</argument>
		<argument>/</argument>
	</application-desc>
	
</jnlp> 




